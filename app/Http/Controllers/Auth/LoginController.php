<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use  Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo ='/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    


  
protected $redirectAfterLogout = '/';
use AuthenticatesUsers {
    logout as doLogout;
}
public function logout(Request $request)
{  
    if(Auth::user() && Auth::user()->roles == 'ADMIN'){
        $this->doLogout($request);
        return redirect()->route('home');
        // return redirect(route('dashboardhome'));

    }elseif(Auth::user() && Auth::user()->roles == 'CLIENT'){
        $this->doLogout($request);
        return redirect()->route('anes');
    }
    elseif(Auth::user() && Auth::user()->roles == 'ISBY'){
        $this->doLogout($request);
        return redirect()->route('isby');
    }
    elseif(Auth::user() && Auth::user()->roles == 'FICRY'){
        $this->doLogout($request);
        return redirect()->route('ficry');
    }
    elseif(Auth::user() && Auth::user()->roles == 'RIOWIRA'){
        $this->doLogout($request);
        return redirect()->route('riowira');
    }
    elseif(Auth::user() && Auth::user()->roles == 'ARDY'){
        $this->doLogout($request);
        return redirect()->route('ardy');
    }
    
    
    else{
        $this->doLogout($request);

        return redirect()->route('home');
    }

   
}

    
}
