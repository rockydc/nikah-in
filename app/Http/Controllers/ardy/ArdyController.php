<?php

namespace App\Http\Controllers\ardy;
use App\Models\User\ardy as Ardy;
use App\Http\Requests\IsbyRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
class ArdyController extends Controller
{
    //
    public function index($name='rocky'){
        $items = Ardy::all();
    
        return view('pages.user.ardy.index',[

            'items'=>$items,
            'name'=>$name
        ]);
    }

    
    
    public function store(IsbyRequest $request){
        //
        $data = $request->all();
        Ardy::create($data);
        return redirect()->route('ardy-success');



    }
    public function success(){
        return view('pages.user.ardy.success');
    }
    public function dashboard(){

        $items = Ardy::all();

        return view('pages.user.ardy.dashboard',[
            'items'=>$items
        ]);
    }


    public function getrsvp(){
        $items = Ardy::get();
        return json_encode(array('data'=>$items));
    }


    public function rsvp(Request $request){
             
        $items = Ardy::all();

            if($request->ajax()){
                
                return datatables()->of($items)->make(true);


            }
        return view('pages.user.ardy.rsvp',compact('items'));
    }
    public function cetakpdf(){

        $items = Ardy::all();
        $pdf = PDF::loadview('layouts.user.data-rsvp_pdf',['items'=>$items]);
        return $pdf->download('laporan-data-rsvp.pdf');
    }
    
}
