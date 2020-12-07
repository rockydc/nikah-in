<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\rsvp_online;
class DashboardController extends Controller
{
    //make code here
    public function index(Request $request){
        $users = rsvp_online::all()->sum('jmlh_orang');
        return view('pages.admin.dashboard',[
            'users'=>$users
        ]);

    }
}
