<?php

namespace App\Http\Controllers\kevinresita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\suhartono as suhartono;


class KevinresitaController extends Controller
{
    //
     //
     public function index($name='rocky'){
        $items = suhartono::all();
        $datapengantin = [
            "cowo"=>"Kevin",
            "cewe"=>"Resita",
            "tgl"=>"27",
            "bln"=>"03",
            "thn"=>"22",
            "lagu"=>"Love Story - Taylor Swift (Cover by Eltasya Natasha ft. Indah Aqila)",
            "lokasi"=>"Keraton Ballroom,Hotel Swiss-Belinn Saripetojo, Solo",
            "tanggal"=>"March 28, 2022",
            "jam akad"=>"07.00 WIB - selesai",
           
            "jam resepsi"=>[
                 [
                "judul" => "Sesi 1",
                "jam"   => "10.00 - 11.00 WIB"
                 ],
                 [
                    "judul" => "Sesi 2",
                    "jam"   => "11.00 - 12.00 WIB"
                    ]
             
            ]
        ];
        $accountbank = [
            "bank1" => [
                "id"=>"rek1",
                "bank"=>"BCA",
                "account"=> "3750113027",
                "acc_name"=> "Kevin Adiyasa"
            ],
            "bank2" => [
                "id"=>"rek2",
                "bank"=>"Mandiri",
                "account"=> "1380009841235",
                "acc_name"=> "Resita Anggraini"
            ]



            ];
        // $pathimg ="{{url('user/"."kevinresita"."/assets/img/".$filename."')}}";

         $profileCowo =[
            "nama"=> "Kevin Adiyasa, S.E.",
            "nick"=> "Kevin",
            "ayah"=>" Letkol CBA (Purn) Amiwardi",
            "ibu"=>"(Almh) Maria Keni",
            "ig"=>"@kadiyasa",
            "ig_link"=>"cc",
            "foto" =>"ic-profile-cowo.png"
        ];
         $profileCewe =[
            "nama"=> "Resita Anggraini, S.E",
            "nick"=> "Sita",
            "ayah"=>"Supriyanto, B.Sc",
            "ibu"=>"Widyastuti, S.E.",
            "ig"=>"@rsitaanggraini",
            "ig_link"=>"cc",
            "foto"=>"ic-profile-cewe.png"
        ];
        $imgGalery = [
            "1.jpg",
            "2.jpg",
            "3.jpg",
            "4.jpg",
            "5.jpg",
            "6.jpg",
            "7.jpg",
            "8.jpg"
            


        ];

        $name = str_replace(["+"], [" "],$name);
        return view('pages.user.kevinresita.index',[

            'items'=>$items,
            'name'=>$name,
            'datapengantin'=>$datapengantin,
            'profilecowo'=>$profileCowo,
            'profilecewe'=>$profileCewe,
            'accountbank'=>$accountbank,
            'imggaleri'=>$imgGalery
           
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
