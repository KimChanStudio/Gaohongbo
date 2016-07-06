<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User,App\Group;
use Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function createUser(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.user.index');
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showUserList(){
        $users = User::paginate(15);

        return view('admin.user.user_list',['users' => $users]);
    }

    /**
     * @param Request $request
     * @return $this
     */
    public function showUserProfile(Request $request){
        $user = User::find($request->input('id'));
        //dump($user);
        return view('admin.user.user_profile')->with('user',$user);
    }

    /**
     * edit user's username
     *
     * @param Requests\user\EditUsernameRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editUsername(Requests\user\EditUsernameRequest $request){
        $user = User::find($request->input('id'));
        $user->username = $request->input('username');
        $user->save();
        return redirect('admin/success')->with('success_info','修改成功');
    }

    /**
     * edit user's profile
     *
     * @param Requests\user\EditProfileRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editProfile(Requests\user\EditProfileRequest $request){
        $user = User::find($request->input('id'));
        $user->last_name  = $request->input('last_name');
        $user->first_name = $request->input('first_name');
        $user->region     = $request->input('region');
        $user->cellphone  = $request->input('cellphone');
        $user->qqnumber   = $request->input('qqnumber');
        $user->birthday   = $request->input('birthday')? $request->input('birthday'):null;
        $user->save();
        return redirect('admin/success')->with('success_info','修改成功');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function activateUser(Request $request){
        $user = User::find($request->input('id'));
        $user->activate();
        return redirect('admin/success')->with('success_info','激活成功');
    }

    public function showAddUser(){
        return view('admin.user.user_add');
    }

    /**
     * @param Requests\admin\AddUserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addUser(Requests\admin\AddUserRequest $request){
        $user = $this->createUser($request->all());
        $group = Group::where('name','User')->first();
        $user->groups()->save($group);
        $user->activate();
        return redirect('admin/success')->with('success_info','添加成功');
    }



}
