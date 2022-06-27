<?php

namespace App\Http\Controllers\riadi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\riadi as Kevinresita;
use App\Http\Requests\IsbyRequest;
use PDF;
class RiadiController extends Controller
{
    //
     //
     public function index($name='rocky'){
        $items = kevinresita::all();

        $datapengantin = [
            "cowo"=>"Riadi",
            "cewe"=>"Anisa",
            "tgl"=>"29",
            "bln"=>"07",
            "thn"=>"22",
            "lagu"=>"-",
            "lokasi"=>"Masjid Raya Fatimah Surakarta, Jl.Dr.Radjiman No.193 Solo",
            "tanggal"=>"July 29, 2022",
            "countdown"=>"July 29, 2022 14:00:00",
            "jam akad"=>"14.00 WIB - selesai",
            "map_link"=> "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.010538289648!2d110.81712461521711!3d-7.573828894538204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a167b5486a9fd%3A0xb1795a1bd6dc6ad1!2sMasjid%20Raya%20Fatimah!5e0!3m2!1sid!2sid!4v1656219520671!5m2!1sid!2sid",
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
                "judul"=>"Akad",
                "lokasi"=>"Masjid Raya Fatimah Surakarta, Jl.Dr.Radjiman No.193 Solo ",
                "tanggal"=>"July 29, 2022",
                "jam"=>[
                    ["subjudul"=>null,
                    "jam"=>"14:00 - Selesai"]   
                ]],
            "sesi2"=>[
                "judul" => "Resepsi",
                "lokasi"=> "rejosari rt 01 rw 01 bendosari, sawit boyolali",
                "tanggal"=>"July 29, 2022",
                "jam"=> [
                    ["subjudul"=>null,
                    "jam"=>"19:00 - Selesai"]   
                ]
            ]
                ];
        $accountbank = [
            "bank1" => [
                "id"=>"rek1",
                "bank"=>"BRI",
                "account"=> "035901029811502",
                "acc_name"=> "Sugeng Riadi"
            ]
            ];
        // $pathimg ="{{url('user/"."kevinresita"."/assets/img/".$filename."')}}";
         $emoney =[
             "name"=>"DANA",
             "img"=>"dana-riadi.png"
         ];
         $profileCowo =[
            "nama"=> "Sugeng Riadi",
            "nick"=> "Oegenk",
            "ayah"=>"Wagio (alm)",
            "ibu"=>"sainah",
            "ig"=>null,
            "ig_link"=>"cc",
            "foto" =>"profile-image-cowok.png"
        ];
         $profileCewe =[
            "nama"=> "Anisa Septi puspaningrum",
            "nick"=> "Nisa",
            "ayah"=>"Soebarto",
            "ibu"=>"Djuminah",
            "ig"=>null,
            "ig_link"=>"cc",
            "foto"=>"profile-image-cewek.png"
        ];
        $imgGalery = null;

        $carouselimg =[
            "bg_riadi.png"
 
        ];
        $modalimg = "bg_riadi.png";

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
        return redirect()->route('riadi-success');



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