<?php

namespace App\Http\Controllers\ficry;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\Ficry as Ficry;
use App\Http\Requests\IsbyRequest;

class FicryController extends Controller
{
    //
    public function index(){
        $items = Ficry::all();
        return view('pages.user.ficry.index',[

            'items'=>$items
        ]);
    }

    
    public function store(IsbyRequest $request){
        //
        $data = $request->all();
        Ficry::create($data);
        return redirect()->route('ficry-success');



    }
    public function success(){
        return view('pages.user.ficry.success');
    }
    public function dashboard(){

        $items = Ficry::all();

        return view('pages.user.ficry.dashboard',[
            'items'=>$items
        ]);
    }


    public function getrsvp(){
        $items = Ficry::get();
        return json_encode(array('data'=>$items));
    }


    public function rsvp(Request $request){
             
        $items = Ficry::all();

            if($request->ajax()){
                
                return datatables()->of($items)->make(true);


            }
        return view('pages.user.ficry.rsvp',compact('items'));
    }
    
}
