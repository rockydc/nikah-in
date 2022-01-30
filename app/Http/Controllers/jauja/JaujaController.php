<?php

namespace App\Http\Controllers\jauja;
use App\Models\User\Jauja as jauja;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\IsbyRequest;

use PDF;

class JaujaController extends Controller
{

    //
    public function index($name='rocky'){
        $items = jauja::all();
        $datapengantin = [
            "cowo"=>"Agus",
            "cewe"=>"Jauja",
            "tgl"=>"06",
            "bln"=>"02",
            "thn"=>"22",
            "lagu"=>"Love Story - Taylor Swift (Cover by Eltasya Natasha ft. Indah Aqila)",
            "lokasi"=>"Perumahan taman kintamani blok D8 no 29 RT 19 RW 08 Jejalen Jaya, Tambun Utara - Bekasi",
            "tanggal"=>"February 06, 2022",
            "jam akad"=>"08.00 - 10.00",
            "jam resepsi"=>"11.00 - 17.00"
        ];
         $profileCowo =[
            "nama"=> "Agus Riyadi",
            "nick"=> "Agus R",
            "ayah"=>"Supardi Hadi Wiyoto",
            "ibu"=>"Rubinem",
            "ig"=>"@boskangkung10"
        ];
         $profileCewe =[
            "nama"=> "Jauza Hasanah Isdiana",
            "nick"=> "Jauza",
            "ayah"=>"Rudi Syamsudin (Alm)",
            "ibu"=>"Isnanik Nurhayati (ALMH)",
            "ig"=>"@jsyam_"
        ];

 
        return view('pages.user.jauja.index',[

            'items'=>$items,
            'name'=>$name,
            'datapengantin'=>$datapengantin,
            'profilecowo'=>$profileCowo,
            'profilecewe'=>$profileCewe
        ]);
    }
    
    public function store(IsbyRequest $request){
        //
        $data = $request->all();
        jauja::create($data);
        return redirect()->route('jauja-success');



    }
    public function success(){
        return view('pages.user.jauja.success');
    }
    public function dashboard(){

        $items = jauja::all();

        return view('pages.user.jauja.dashboard',[
            'items'=>$items
        ]);
    }


    public function getrsvp(){
        $items = jauja::get();
        return json_encode(array('data'=>$items));
    }


    public function rsvp(Request $request){
             
        $items = jauja::all();

            if($request->ajax()){
                
                return datatables()->of($items)->make(true);


            }
        return view('pages.user.jauja.rsvp',compact('items'));
    }

    public function cetakpdf(){

        $items = jauja::all();
    
        $pdf = PDF::loadview('layouts.user.data-rsvp_pdf',['items'=>$items])->setOptions(['defaultPaperSize'=>'a3']);
        return $pdf->download('laporan-data-rsvp.pdf');
    } 
    
}
