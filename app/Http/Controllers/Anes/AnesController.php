<?php

namespace App\Http\Controllers\Anes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\rsvp_online;
use App\Http\Requests\Admin\rsvp_onlineRequest;
use Illuminate\Support\Str;
use Validator;

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

                $data = rsvp_online::insert([
                    'nama'=>$request->nama,
                    'no_telepon'=>$request->no_telepon,
                    'email'=>$request->email,
                    'pesan'=>$request->pesan,
                    'slug'=>Str::slug($request->nama),
                    'status'=>$request->status,
                    'jmlh_orang'=>$request->jmlh_orang
                ]);

             

                return redirect()->route('anes');

        
    }
}
