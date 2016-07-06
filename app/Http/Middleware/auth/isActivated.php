<?php

namespace App\Http\Middleware\auth;

use Closure,Auth;

class isActivated
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
        $response = $next($request);
        $email = $request->input('email');
        $password = $request->input('password');
        $user = Auth::attempt(['email' => $email, 'password' => $password, 'activated' => 1]);
        if ($user) {
            //return view('errors/error',['error_info' => '请完成邮箱验证后重试']);
            //return $next($request);
            return $response;
        }else{
            //Auth::logout();
            return redirect('error')->with('error_info', '请完成邮箱验证后重试!');
            //return response()->view('error', ['error_info' => '请完成邮箱验证后重试!']);
        }

    }
}
