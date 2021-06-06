<?php

namespace App\Http\Controllers\ferry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\ferry as Ferry;
use App\Http\Requests\IsbyRequest;


class FerryController extends Controller
{
    //
    public function index(){

        $items = Ferry::all();
        return view('pages.user.ferry.index',[

            'items'=>$items
        ]);
    }

    public function store(IsbyRequest $request){
        //
      

        $data = $request->all();
        
        
        Ferry::create($data);

     

        return redirect()->route('ferry-success');



    }

    public function success(){
        return view('pages.user.ferry.success');
    }

    public function dashboard(){

        $items = Ferry::all();

        return view('pages.user.ferry.dashboard',[
            'items'=>$items
        ]);
    }

    public function getrsvp(){
        $items = Ferry::get();
        return json_encode(array('data'=>$items));
    }


    public function rsvp(Request $request){
             
        $items = Ferry::all();

            if($request->ajax()){
                
                return datatables()->of($items)->make(true);


            }
        return view('pages.user.ferry.rsvp',compact('items'));
    }
}
