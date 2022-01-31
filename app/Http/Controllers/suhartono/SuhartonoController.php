<?php

namespace App\Http\Controllers\suhartono;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\IsbyRequest;
use App\Models\User\suhartono as suhartono;

class SuhartonoController extends Controller
{
    //

        //
        public function index($name='rocky'){
            $items = suhartono::all();
            $datapengantin = [
                "cowo"=>"Suhartono",
                "cewe"=>"Dewi Kurniasih",
                "tgl"=>"28",
                "bln"=>"02",
                "thn"=>"22",
                "lagu"=>"Love Story - Taylor Swift (Cover by Eltasya Natasha ft. Indah Aqila)",
                "lokasi"=>"Desa Wonosari kecamatan SenoriKabupaten Tuban RT.009/ RW.003",
                "tanggal"=>"February 28, 2022",
                "jam akad"=>"09.00 - selesai",
                "jam resepsi"=>"11.00 - selesai"
            ];
             $profileCowo =[
                "nama"=> "Suhartono",
                "nick"=> "Tono",
                "ayah"=>"Saryono",
                "ibu"=>"Saenah",
                "ig"=>"@boskangkung10"
            ];
             $profileCewe =[
                "nama"=> "Dewi Kurniasih",
                "nick"=> "Dewi",
                "ayah"=>"Mukrimun",
                "ibu"=>"Gimiati",
                "ig"=>"@jsyam_"
            ];
    
     
            return view('pages.user.suhartono.index',[
    
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
            suhartono::create($data);
            return redirect()->route('suhartono-success');
    
    
    
        }
        public function success(){
            return view('pages.user.suhartono.success');
        }
        public function dashboard(){
    
            $items = suhartono::all();
    
            return view('pages.user.suhartono.dashboard',[
                'items'=>$items
            ]);
        }
    
    
        public function getrsvp(){
            $items = suhartono::get();
            return json_encode(array('data'=>$items));
        }
    
    
        public function rsvp(Request $request){
                 
            $items = suhartono::all();
    
                if($request->ajax()){
                    
                    return datatables()->of($items)->make(true);
    
    
                }
            return view('pages.user.suhartono.rsvp',compact('items'));
        }
    
        public function cetakpdf(){
    
            $items = suhartono::all();
        
            $pdf = PDF::loadview('layouts.user.data-rsvp_pdf',['items'=>$items])->setOptions(['defaultPaperSize'=>'a3']);
            return $pdf->download('laporan-data-rsvp.pdf');
        } 
}
