<?php

namespace App\Http\Controllers\daniel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\daniel as Daniel;
use App\Http\Requests\IsbyRequest;

class DanielController extends Controller
{
    //
    
    public function index(){
        $items = Daniel::all();
        return view('pages.user.daniel.index',[

            'items'=>$items
        ]);
    }

    public function store(Request $request){
        //
      

        $data = $request->all();
        Daniel::create($data);
        return redirect()->route('daniel-success');



    }

    public function success(){
        return view('pages.user.daniel.success');
    }

    public function dashboard(){

        $items = Daniel::all();

        return view('pages.user.daniel.dashboard',[
            'items'=>$items
        ]);
    }

    public function getrsvp(){
        $items = Daniel::get();
        return json_encode(array('data'=>$items));
    }


    public function rsvp(Request $request){
             
        $items = Daniel::all();

            if($request->ajax()){
                
                return datatables()->of($items)->make(true);


            }
        return view('pages.user.daniel.rsvp',compact('items'));
    }
}
