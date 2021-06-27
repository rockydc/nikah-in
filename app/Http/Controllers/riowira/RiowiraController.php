<?php

namespace App\Http\Controllers\riowira;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\IsbyRequest;
use App\Models\User\Riowira as Riowira;


class RiowiraController extends Controller
{
    //
    public function index(){
        $items = Riowira::all();
        return view('pages.user.riowira.index',[
            'items'=>$items
        ]
    );

    }
    
    public function store(Request $request){
        //
        $data = $request->all();
        Riowira::create($data);
        return redirect()->route('riowira-success');



    }
    public function success(){
        return view('pages.user.riowira.success');
    }
    public function dashboard(){

        $items = Riowira::all();

        return view('pages.user.riowira.dashboard',[
            'items'=>$items
        ]);
    }


    public function getrsvp(){
        $items = Riowira::get();
        return json_encode(array('data'=>$items));
    }


    public function rsvp(Request $request){
             
        $items = Riowira::all();

            if($request->ajax()){
                
                return datatables()->of($items)->make(true);


            }
        return view('pages.user.riowira.rsvp',compact('items'));
    }
}
