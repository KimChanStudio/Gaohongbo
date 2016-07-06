<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\auth\LoginPostRequest;
use App\Http\Requests\auth\RegisterPostRequest;
use App\User;
use Validator,Auth,Mail,Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Where to redirect users after logout.
     *
     * @var string
     */
    protected $redirectAfterLogout = '/home';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            //'username' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|max:20|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            //'username' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /*
    |--------------------------------------------------------------------------
    | Show pages
    |--------------------------------------------------------------------------
    |
    |
    |
    */
    /**
     * Show the login page.
     *
     * @param
     * @return view
     */
    public function getLogin()
    {
        if (Auth::check()) {
            //redirect to home page
            return redirect('home');
        }else{
            return view('auth.login');
        }

    }

    /**
     * Show the login page.
     *
     * @param
     * @return view
     */
    public function getRegister()
    {
        return view('auth.register');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function getAdminLogin()
    {
        if (Auth::check()) {
            //admin
            return redirect('home');
            //user

        }else{
            return view('auth.admin_login');
        }
    }

    /*
    |--------------------------------------------------------------------------
    | auth functions
    |--------------------------------------------------------------------------
    |
    |
    |
    */

    /**
     * users sign in
     *
     * @author Kim
     * @param LoginPostRequest $request
     * @return $this
     */
    public function postLogin(LoginPostRequest $request)
    {
        //if user has signed in
        if (Auth::check()) {
            //redirect to home page
            return redirect('home');
        }
        $email    = $request->input('email');
        $password = $request->input('password');
        $remember = $request->input('remember');

        //login attempt
        if (Auth::attempt(['email' => $email, 'password' => $password],false,true)) {
            $user = Auth::user();
            //if user is activated
            if ($user->activated){
                if (Auth::viaRemember()){
                    Auth::login($user,true);
                }else{
                    Auth::login($user);
                }
                $this->updateLastLoginRecord($user);
                return redirect()->intended($this->redirectTo);

            }else{
                Auth::logout();
                return redirect('error')->with('error_info', '请完成邮箱账号激活后重试!');
            }

        }else{
            return redirect('error')->with('error_info','请确认用户名和密码后再次尝试');
        }
        

    }

    /**
     * @param RegisterPostRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postRegister(RegisterPostRequest $request)
    {
        Auth::guard($this->getGuard())->login($this->create($request->all()));
        $user = Auth::user();
        //set user group
        $group = Group::where('name','User')->first();
        $user->groups()->save($group);
        //send activation mail to user
        $activation_code = $this->generateActivationCode();
        $user->activation_code = $activation_code;
        $user->save();
        $this->sendActivationMail($user->email,$user->activation_code);
        return redirect('error')->with('error_info','请前往注册时使用的邮箱完成账号激活');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function activation(Request $request)
    {
        //$email = $request->input('email');
        //$activation_code = $request->input('activation_code');

        $user = $this->findUserByEmail($request->input('email'));
        if($user){
            $this->activationComplete($user);
            return redirect('success')->with('success_info','激活成功，请登录');
        }else{
            return redirect('error')->with('error_info','激活失败，请重试');
        }
    }


    /**
     * @param LoginPostRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postAdminLogin(LoginPostRequest $request)
    {
        //if user has signed in
        if (Auth::check()) {
            //admin
            return redirect('home');
            //user
        }
        $email    = $request->input('email');
        $password = $request->input('password');

        //login attempt
        if (Auth::attempt(['email' => $email, 'password' => $password],false,true)) {
            $user = Auth::user();
            $group = $user->groups()->first();
            //if user is activated
            if ($group->name == 'User'){
                Auth::logout();
                return redirect('error')->with('error_info', '非管理员请勿使用此登陆入口!');

            }else{
                return redirect('admin/index');
            }

        }else{
            return redirect('error')->with('error_info','请确认用户名和密码后再次尝试');
        }


    }



    /**
     * update user's last_login info
     *
     * @param $user
     */
    protected function updateLastLoginRecord($user)
    {
        $user->last_login = Carbon::now();
        $user->save();

    }

    /**
     * generate activation code for user registion
     *
     * @return string
     */
    protected function generateActivationCode()
    {
        return str_random(32);
    }


    /**
     * @param $email
     * @param $activation_code
     */
    protected function sendActivationMail($email,$activation_code)
    {
        $activation_url = config('url').'auth/activate?email=' . $email . '&activation_code=' . $activation_code;
        Mail::queue('emails.auth.active_account', ['email'          => $email,
            'activation_url' => $activation_url], function ($message) use ($email) {
            $message->from('kimchan@tongjo.com', '账号激活');
            $message->to ($email)->subject('欢迎注册高洪波吧粉丝团官方网站!');
        });
    }

    /**
     * @param $user
     */
    protected function activationComplete($user)
    {
        $user->activated = 1;
        $user->activation_code = null;
        $user->activated_at = Carbon::now();
        $user->save();
    }

    /**
     * @param $email
     * @return mixed
     */
    protected function findUserByEmail($email){
        return User::where('email', $email)->first();
    }

}
