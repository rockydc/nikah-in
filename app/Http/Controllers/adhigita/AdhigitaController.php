<?php

namespace App\Http\Controllers\adhigita;
use App\Models\User\adhigita as adhigita;
use App\Http\Requests\IsbyRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class AdhigitaController extends Controller
{
    //
       //
       public function index($name='rocky'){
        $items = adhigita::all();
    
        return view('pages.user.adhigita.index',[

            'items'=>$items,
            'name'=>$name
        ]);
    }

    
    
    public function store(IsbyRequest $request){
        //
        $data = $request->all();
        adhigita::create($data);
        return redirect()->route('adhigita-success');



    }
    public function success(){
        return view('pages.user.adhigita.success');
    }
    public function dashboard(){

        $items = adhigita::all();

        return view('pages.user.adhigita.dashboard',[
            'items'=>$items
        ]);
    }


    public function getrsvp(){
        $items = adhigita::get();
        return json_encode(array('data'=>$items));
    }


    public function rsvp(Request $request){
             
        $items = adhigita::all();

            if($request->ajax()){
                
                return datatables()->of($items)->make(true);


            }
        return view('pages.user.adhigita.rsvp',compact('items'));
    }
    public function cetakpdf(){

        $items = adhigita::all();
    
        $pdf = PDF::loadview('layouts.user.data-rsvp_pdf',['items'=>$items])->setOptions(['defaultPaperSize'=>'a3']);
        return $pdf->download('laporan-data-rsvp.pdf');
    } 
}
