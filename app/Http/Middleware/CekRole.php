<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ... $roles)
    {

     

        $user = Auth::user();

        foreach($roles as $role){
            try{

           
            if(! $request->user()->hasRole($role)){
                return $next($request);
            }
        }catch (ModelNotFoundException $exception) {

            dd('Could not find role ' . $role);
        }

        }

        Flash::warning('Access Denied', 'You are not authorized to view that content.'); // custom flash class
        return redirect('/login');


        // if(Auth::user() && Auth::user()->roles == 'anes'){
        //     return redirect(url('anes-nahomi/admin'));
        // }elseif(
        //     Auth::user() && Auth::user()->roles == 'admin'

        // ){
        //     return redirect(url('anes-nahomi/admin'));
        // }
        // return $next($request);
    }
}
