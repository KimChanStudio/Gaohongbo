<?php

namespace App\Http\Middleware\admin;

use Closure;
use Auth;

class IsAdminMiddleware
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
        if (!Auth::check()) {
            return redirect('auth/admin/login');
        }else{
            $user = Auth::user();
            $group = $user->groups()->first();
            //if user is activated
            if ($group->name == 'User'){
                Auth::logout();
                return redirect('error')->with('error_info', '没有管理员权限哦!');

            }else{
                return $next($request);
            }
        }


    }
}
