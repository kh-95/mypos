<?php

namespace App\Http\Middleware;

use Closure;

class UserCheckMiddleware
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




        if(!auth()->check()||auth()->user()->role !="user"){

            return redirect(route('login_user'));
        }
        return $next($request);
    }
    
    
}
