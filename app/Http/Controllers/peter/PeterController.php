<?php

namespace App\Http\Controllers\peter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\peter as Peter;
use App\Http\Requests\PeterRequest;

class PeterController extends Controller
{
    //

    public function index(){
        $items = Peter::all();
        return view('pages.user.Peter.index',[

            'items'=>$items
        ]);
    }
    public function store(PeterRequest $request){
        //
      

        $data = $request->all();
        
        
        Peter::create($data);

     

        return redirect()->route('peter-success');



    }

    public function success(){
        return view('pages.user.peter.success');
    }

    public function dashboard(){

        $items = Peter::all();

        return view('pages.user.peter.dashboard',[
            'items'=>$items
        ]);
    }

    public function getrsvp(){
        $items = Peter::get();
        return json_encode(array('data'=>$items));
    }


    public function rsvp(Request $request){
             
        $items = Peter::all();

            if($request->ajax()){
                
                return datatables()->of($items)->make(true);


            }
        return view('pages.user.peter.rsvp',compact('items'));
    }
}
