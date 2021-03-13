<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class IsAdmin
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
        if(Auth::user() && Auth::user()->roles == 'ADMIN'){
        
            return $next($request);

        }elseif(Auth::user()&& Auth::user()->roles == 'CLIENT'){
            return redirect(url('/anes-nahomi/admin'));
        }

        // if(Auth::user()&& Auth::user()->roles == 'CLIENT'){
        //     return $next($request);
        // }
        return redirect(url('/login'));
    }
}
