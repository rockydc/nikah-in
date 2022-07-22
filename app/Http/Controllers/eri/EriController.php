<?php

namespace App\Http\Controllers\eri;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\eri as eri;
use App\Http\Requests\IsbyRequest;
use PDF;
class EriController extends Controller
{
    //
    public function index($name='rocky'){
        $items = eri::all();

        $datapengantin = [
            "cowo"=>"Septian",
            "cewe"=>"Eri",
            "tgl"=>"24",
            "bln"=>"07",
            "thn"=>"22",
            "lagu"=>"Brian McKnight Jr - Marry Your Daughter",
            "lokasi"=>"Gedung Kementrian Agama Jakarta Timur",
            "tanggal"=>"July 24, 2022",
            "countdown"=>"July 24, 2022 09:00:00",
            "jam akad"=>"09.00 WIB - selesai",
            "map_link"=> "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3393487655394!2d106.9449081147167!3d-6.218903395498166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c9b4f8c6e3f%3A0x47dda684a16c692!2sKementerian%20Agama%20Kota%20Jakarta%20Timur!5e0!3m2!1sid!2sid!4v1657543515340!5m2!1sid!2sid",
        
        ];

        $sesi = [
            "sesi1"=>[
                "judul"=>"Akad",
                "lokasi"=>"Gedung Kementrian Agama Jakarta Timur",
                "tanggal"=>"July 24, 2022",
                "jam"=>[
                    ["subjudul"=>null,
                    "jam"=>"09:00 - 10:00"]   
                ]],
            "sesi2"=>[
                "judul" => "Resepsi",
                "lokasi"=> "Gedung Kementrian Agama Jakarta Timur",
                "tanggal"=>"July 24, 2022",
                "jam"=> [
                    ["subjudul"=>null,
                    "jam"=>"12:00 - 17:00"]   
                ]
            ]
                ];
        $accountbank = [
            "bank1" => [
                "id"=>"rek1",
                "bank"=>"BCA",
                "account"=> "4130421631",
                "acc_name"=> "septian eka prasetiyo"
            ]
            ];
        // $pathimg ="{{url('user/"."eri"."/assets/img/".$filename."')}}";
        $imgCarousel =[
            "slide1"=>[
                "img"=>"6.webp",
                "isActive"=>true
            ],
            "slide2"=>[
                "img"=>"7.webp",
                "isActive"=>false
            ]
            ];
         $emoney =[
            "emoney1"=>[
                "name"=>"DANA",
                "img"=>"qrcode2.jpeg"
            ]


         ];
         $profileCowo =[
            "nama"=> "Septian Eka Prasetiyo",
            "nick"=> "Septian",
            "ayah"=>"Ari Suparyogo",
            "ibu"=>"Djulaeha",
            "ig"=>null,
            "ig_link"=>"cc",
            "foto" =>"profile-image-cowok.png"
        ];
         $profileCewe =[
            "nama"=> "Eri Novitasari",
            "nick"=> "Eri",
            "ayah"=>"Moh.Khoeri",
            "ibu"=>"Sri Katon",
            "ig"=>null,
            "ig_link"=>"cc",
            "foto"=>"profile-image-cewek.png"
        ];
        $imgGalery = [
            "1.webp",
            "2.webp",
            "3.webp",
            "4.webp",
            "5.webp",
            "6.webp"
        ];
        $modalimg = "6.webp";

        $name = str_replace(["+"], [" "],$name);
        return view('pages.user.eri.index',[

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
    
    public function store(IsbyRequest $request){
        //
        $data = $request->all();
        eri::create($data);
        return redirect()->route('eri-success');



    }
    public function success(){
        return view('pages.user.eri.success');
    }
    public function dashboard(){

        $items = eri::all();

        return view('pages.user.eri.dashboard',[
            'items'=>$items
        ]);
    }


    public function getrsvp(){
        $items = eri::get();
        return json_encode(array('data'=>$items));
    }


    public function rsvp(Request $request){
             
        $items = eri::all();

            if($request->ajax()){
                
                return datatables()->of($items)->make(true);


            }
        return view('pages.user.eri.rsvp',compact('items'));
    }

    public function cetakpdf(){

        $items = eri::all();
    
        $pdf = PDF::loadview('layouts.user.data-rsvp_pdf',['items'=>$items])->setOptions(['defaultPaperSize'=>'a3']);
        return $pdf->download('laporan-data-rsvp.pdf');
    } 
}
