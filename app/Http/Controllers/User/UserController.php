<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\http\Requests\user\EditUsernameRequest;
use App\http\Requests\user\EditProfileRequest;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth.IsLoginMiddleware');


    }


    /**
     * @return $this
     */
    public function showProfile(){

        $user = Auth::user();
        return view('user.profile')->with('user',$user);
    }

    public function editUsername(EditUsernameRequest $request){

        $user = Auth::user();
        if($user->username){
            return redirect('error')->with('error_info', '已设置用户名，无法更改!');
        }else{
            $username = $request->input('username');
            $user->username = $username;
            $user->save();
            return redirect('success')->with('success_info','设置成功');
        }
    }

    public function editProfile(EditProfileRequest $request){
        $user = Auth::user();
        $user->last_name  = $request->input('last_name');
        $user->first_name = $request->input('first_name');
        $user->region     = $request->input('region');
        $user->cellphone  = $request->input('cellphone');
        $user->qqnumber   = $request->input('qqnumber');
        $user->birthday   = $request->input('birthday')? $request->input('birthday'):null;
        $user->save();
        return redirect('success')->with('success_info','修改成功');
    }


}
