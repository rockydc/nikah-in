<?php

namespace App\Http\Controllers\isby;
use DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\isby as Isby;

use App\Http\Requests\IsbyRequest;

class IsbyController extends Controller
{
    //

    public function index(){
        $items = Isby::all();
        return view('pages.user.isby.index',[

            'items'=>$items
        ]);
    }
    public function store(IsbyRequest $request){
        //
      

        $data = $request->all();
        
        
        Isby::create($data);

     

        return redirect()->route('isby-success');



    }

    public function success(){
        return view('pages.user.isby.success');
    }

    public function dashboard(){

        $items = Isby::all();

        return view('pages.user.isby.dashboard',[
            'items'=>$items
        ]);
    }

    public function getrsvp(){
        $items = Isby::get();
        return json_encode(array('data'=>$items));
    }


    public function rsvp(Request $request){
             
        $items = Isby::all();

            if($request->ajax()){
                
                return datatables()->of($items)->make(true);


            }
        return view('pages.user.isby.rsvp',compact('items'));
    }
}
