<?php

namespace App\Http\Controllers\rizky;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RizkiController extends Controller
{
    //
     //
     public function index($name='rocky'){
        $items = kevinresita::all();

        $datapengantin = [
            "cowo"=>"Rizki",
            "cewe"=>"Went",
            "tgl"=>"15",
            "bln"=>"05",
            "thn"=>"22",
            "lagu"=>"Love Story - Taylor Swift (Cover by Eltasya Natasha ft. Indah Aqila)",
            "lokasi"=>"Jalan Veteran No. 11 RT.23 Rw.04 (belakang Pegadaian) Kota Marabahan Kec.Marabahan Kab.Barito Kuala Kal-Sel 70511",
            "tanggal"=>"March 27, 2022",
            "jam akad"=>"09.00 WIB - selesai",
            "map_link"=> "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d655.2890939851264!2d114.76751809249433!3d-2.9806444610082288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de44e4bdf2e47d5%3A0x736faf193b2c11cb!2sJl.%20Veteran%20No.11%2C%20Marabahan%20Kota%2C%20Kec.%20Marabahan%2C%20Kabupaten%20Barito%20Kuala%2C%20Kalimantan%20Selatan%2070513!5e0!3m2!1sid!2sid!4v1651457620931!5m2!1sid!2sid",
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

        $sesi = [
            "sesi1"=>[
                "judul"=>"Akad dan Resepsi",
                "lokasi"=>"Jalan Veteran No. 11 RT.23 Rw.04 (belakang Pegadaian) Kota Marabahan Kec.Marabahan Kab.Barito Kuala Kal-Sel 70511",
                "tanggal"=>"May 15, 2022",
                "jam"=>[
                    ["subjudul"=>null,
                    "jam"=>"09:00 - Selesai"]   
                ]],
            "sesi2"=>[
                "judul" => "Ngunduh Mantu",
                "lokasi"=> " Jalan Banjir Kanal Rt10 Rw01, Grogol , Grogol Petamburan , Jakarta Barat 11450",
                "tanggal"=>"May 22, 2022",
                "jam"=> [
                    ["subjudul"=>null,
                    "jam"=>"09:00 - Selesai"]   
                ]
            ]
                ];
        $accountbank = [
            "bank1" => [
                "id"=>"rek1",
                "bank"=>"BRI",
                "account"=> "086301019679537",
                "acc_name"=> "RIZKY"
            ]
            ];
        // $pathimg ="{{url('user/"."kevinresita"."/assets/img/".$filename."')}}";
         $emoney =[
             "name"=>"DANA",
             "img"=>"dana.png"
         ];
         $profileCowo =[
            "nama"=> "Rizki",
            "nick"=> "Rizki",
            "ayah"=>"Kurnianto",
            "ibu"=>"Hariani",
            "ig"=>"",
            "ig_link"=>"cc",
            "foto" =>"profile-image-cowok.png"
        ];
         $profileCewe =[
            "nama"=> "Whiwent Aulia",
            "nick"=> "Went",
            "ayah"=>"Alm.Darjat",
            "ibu"=>"Almh.Siti Aisyah",
            "ig"=>"",
            "ig_link"=>"cc",
            "foto"=>".png"
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

        $carouselimg =[
            "8.jpg",
            "7.jpg",
            "2.jpg",
        ];
        $modalimg = "6.jpg";

        $name = str_replace(["+"], [" "],$name);
        return view('pages.user.kevinresita.index',[

            'items'=>$items,
            'name'=>$name,
            'datapengantin'=>$datapengantin,
            'profilecowo'=>$profileCowo,
            'profilecewe'=>$profileCewe,
            'accountbank'=>$accountbank,
            'imggaleri'=>$imgGalery,
            'carouselimg'=>$carouselimg,
            'modalimg'=>$modalimg,
            "sesi"=>$sesi,
            "emoney"=>$emoney
           
        ]);
    }
    
    public function store(IsbyRequest $request){
        //
        $data = $request->all();
        kevinresita::create($data);
        return redirect()->route('kevinresita-success');



    }
    public function success(){
        return view('pages.user.kevinresita.success');
    }
    public function dashboard(){

        $items = kevinresita::all();

        return view('pages.user.kevinresita.dashboard',[
            'items'=>$items
        ]);
    }


    public function getrsvp(){
        $items = kevinresita::get();
        return json_encode(array('data'=>$items));
    }


    public function rsvp(Request $request){
             
        $items = kevinresita::all();

            if($request->ajax()){
                
                return datatables()->of($items)->make(true);


            }
        return view('pages.user.kevinresita.rsvp',compact('items'));
    }

    public function cetakpdf(){

        $items = kevinresita::all();
    
        $pdf = PDF::loadview('layouts.user.data-rsvp_pdf',['items'=>$items])->setOptions(['defaultPaperSize'=>'a3']);
        return $pdf->download('laporan-data-rsvp.pdf');
    } 
}