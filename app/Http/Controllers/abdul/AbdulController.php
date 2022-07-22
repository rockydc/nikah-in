<?php

namespace App\Http\Controllers\abdul;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\abdul as abdul;

use PDF;
class AbdulController extends Controller
{
    //
    public function index($name='rocky'){
        $items = abdul::all();

        $datapengantin = [
            "cowo"=>"fakhri",
            "cewe"=>"laras",
            "tgl"=>"24",
            "bln"=>"07",
            "thn"=>"22",
            "lagu"=>"maliq & d'essentials menari",
            "lokasi"=>"hotel daima norwood",
            "tanggal"=>"July 24, 2022",
            "countdown"=>"July 24, 2022 13:30:00",
            "jam akad"=>"13.30 WIB - selesai",
            "map_link"=> null,
        
        ];

        $sesi = [
            "sesi1"=>[
                "judul"=>"Akad",
                "lokasi"=>"Hotel Daima Norwood",
                "tanggal"=>"July 24, 2022",
                "jam"=>[
                    ["subjudul"=>null,
                    "jam"=>"13.30 - selesai"]   
                ],
                "streaming"=>[
                    "title"=>"Live Streaming",
                    "link"=>"https://us06web.zoom.us/j/84650823129?pwd=ZG5yd0I4RTBpYWhiY2ZvVnlKWGpsUT09",
                    "isActive"=>true
                ]
            
            ],
            "sesi2"=>[
                "judul"=>"Akad",
                "lokasi"=>"Gedung Kementrian Agama Jakarta Timur",
                "tanggal"=>"July 24, 2022",
                "jam"=>[
                    ["subjudul"=>null,
                    "jam"=>"09:00 - 10:00"]   
                ],
                "isActive"=>false
                
                ]
                ];
        $accountbank = [
            "bank1" => [
                "id"=>"rek1",
                "bank"=>"BCA",
                "account"=> "4130298031",
                "acc_name"=> "Laras Kusumadewi"
            ]
            ];
        // $pathimg ="{{url('user/"."eri"."/assets/img/".$filename."')}}";
        $imgCarousel =[
            "slide1"=>[
                "img"=>"1.webp",
                "isActive"=>true
            ],
            "slide2"=>[
                "img"=>"2.webp",
                "isActive"=>false
            ]
            ];
         $emoney =[
            "emoney1"=>[
                "name"=>"BCA",
                "img"=>"qrcode.jpeg"
            ]


         ];
         $profileCowo =[
            "nama"=> "Fakhri abdulmatin",
            "nick"=> "Fakhri",
            "ayah"=>"Bandi sukmadi",
            "ibu"=>"Aulia",
            "ig"=> "@fakhriabdlmtn",
            "ig_link"=>"https://www.instagram.com/fakhriabdlmtn/",
            "foto" =>"profile-image-cowok.png"
        ];
         $profileCewe =[
            "nama"=> "Laras kusumadewi",
            "nick"=> "Laras",
            "ayah"=>"Adhi purnomo",
            "ibu"=>"Herwinarni",
            "ig"=> "Laras.kusuma",
            "ig_link"=>"https://www.instagram.com/laras.kusuma/",
            "foto"=>"profile-image-cewek.png"
        ];
        $imgGalery = [
            "2.webp",
            "3.webp",
            "4.webp",
            "5.webp",
            "6.webp",
            "7.webp",
            "1.webp",
            "9.webp"
        ];
        $modalimg = "1.webp";

        $name = str_replace(["+"], [" "],$name);
        return view('pages.user.abdul.index',[

            'items'=>$items,
            'name'=>$name,
            'datapengantin'=>$datapengantin,
            'profilecowo'=>$profileCowo,
            'profilecewe'=>$profileCewe,
            'accountbank'=>$accountbank,
            'imggaleri'=>$imgGalery,
            'imgCarousel'=>$imgCarousel,
            'modalimg'=>$modalimg,
            "sesi"=>$sesi,
            "emoney"=>$emoney
           
        ]);
    }
    
    public function store(Request $request){
        //
        $nama = $request->nama;
        $pesan = $request->pesan;

        abdul::create([
            'nama'=>$nama,
            'pesan'=>$pesan,
            "email"=>null,
            "ikatan"=>null
        ]);
        return redirect()->route('abdul-success');



    }
    public function success(){
        return view('pages.user.abdul.success');
    }
    public function dashboard(){

        $items = abdul::all();

        return view('pages.user.abdul.dashboard',[
            'items'=>$items
        ]);
    }


    public function getrsvp(){
        $items = abdul::get();
        return json_encode(array('data'=>$items));
    }


    public function rsvp(Request $request){
             
        $items = abdul::all();

            if($request->ajax()){
                
                return datatables()->of($items)->make(true);


            }
        return view('pages.user.abdul.rsvp',compact('items'));
    }

    public function cetakpdf(){

        $items = abdul::all();
    
        $pdf = PDF::loadview('layouts.user.data-rsvp_pdf',['items'=>$items])->setOptions(['defaultPaperSize'=>'a3']);
        return $pdf->download('laporan-data-rsvp.pdf');
    } 
}
