<?php

namespace App\Http\Controllers\Anes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\rsvp_online;
use App\guestbook_anes_model;
use App\Http\Requests\Admin\rsvp_onlineRequest;
use Illuminate\Support\Str;
use Validator;
use Carbon\Carbon;

class AnesController extends Controller
{

    
    public function index(Request $request){

        $items = rsvp_online::all();

        return view('pages.anes.home',[
            'items'=>$items
        ]);
    }

    public function store(Request $request){
                //
                $request->validate([
                    'nama'=>'required|string',
                    'no_telepon'=>'required|numeric',
                    'email'=>'required|email'

                ]);
          
                $data = array(
                    'nama'=>$request->post('nama'),
                    'no_telepon'=>$request->post('no_telepon'),
                    'email'=>$request->post('email'),
                    'pesan'=>$request->post('pesan'),
                    'slug'=>Str::slug($request->post('nama')),
                    'status'=>$request->post('status'),
                    'jmlh_orang'=>$request->post('jmlh_orang')
                    
                );
                rsvp_online::create($data);

             

                return redirect()->route('anes');

        
    }
    public function guest(Request $request){
        return view('layouts.guestbookAnes');
    }
    public function gueststore(Request $request){
        $request->validate([
            'nama'=>'required|string',
            'no_telepon'=>'required|numeric',
            'alamat'=>'required'

        ]);

       
     
        $data = array(
            'nama'=>$request->post('nama'),
            'no_telepon'=>$request->post('no_telepon'),
            'alamat'=>$request->post('alamat'),
            'kerabat'=>$request->post('kerabat'),
            'jmlh_orang'=>$request->post('jmlh_orang')
        );
        guestbook_anes_model::create($data);

        
        return redirect()->route('anesguest')->with('message','Data Insert Successfully');
        
    }
}
