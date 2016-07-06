<?php

namespace App\Http\Middleware\admin;

use Closure;
use App\User;
use Auth;

class IsEnoughPermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //current admin's group
        $admin = Auth::user();
        $admin_group_name = $admin->groups()->first()->name;
        //current user's group
        $user = User::find($request->input('id'));
        $user_group_name = $user->groups()->first()->name;
        $ret = false;
        if($admin_group_name == 'UltraAdmin'){
            $ret = true;
        }elseif ($admin_group_name == 'Admin'){
            if( ($user_group_name == 'Moderator') || ($user_group_name == 'User') ){
                $ret = true;
            }
        }else{

        }

        if($ret == false){
            return redirect('error')->with('error_info', '权限不够哦!');
        }else{
            return $next($request);
        }

    }
}
