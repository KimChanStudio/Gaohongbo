<?php

namespace App\Http\Middleware\auth;

use Auth;
use Closure;

class IsLoginMiddleware
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
            return redirect('auth/login');
        }
        return $next($request);
    }
}
