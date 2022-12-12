<?php

namespace App\Http\Controllers\febrirakmah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\febrirakmah as ari;
use App\Http\Requests\IsbyRequest;
use PDF;
class FebriController extends Controller
{
    //
    public function index($name='rocky'){
        $items = ari::all();

        $datapengantin = [
            "cowo"=>"Febri",
            "cewe"=>"Santoso",
            "tgl"=>"28",
            "bln"=>"10",
            "thn"=>"22",
            "lagu"=>"-",
            "lokasi"=>"Jl. Pahlawan Revolusi No. 47 Pondok Bambu",
            "tanggal"=>"28 Oktober, 2022",
            "countdown"=>"28 October, 2022 10:00:00",
            "jam akad"=>"10.00 WIB - Selesai",
            "map_link"=> "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1475445841843!2d106.9410197!3d-6.244278500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698ce605f732e9%3A0xf0e162d8eb8b4fee!2sJl.%20Swakarsa%20III%2C%20RW.3%2C%20Pd.%20Klp.%2C%20Kec.%20Duren%20Sawit%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013450!5e0!3m2!1sid!2sid!4v1665220409262!5m2!1sid!2sid",
        
        ];

        $sesi = [
            "sesi1"=>[
                "judul"=>"Akad",
                "lokasi"=>"Jl. Pahlawan Revolusi No. 47 Pondok Bambu",
                "tanggal"=>"Oktober 28, 2022",
                "jam"=>[
                    ["subjudul"=>null,
                    "jam"=>"10:00 - Selesai"]   
                ],
                "isActive"=>true
                ],
            "sesi2"=>[
                "judul" => "Resepsi",
                "lokasi"=> "Jl. Swakarsa III/ No. 27 Rt:007/ Rw:03
                Kel. Pondok Kelapa
                Kec. Duren Sawit 13450",
                "tanggal"=>"October 28, 2022",
                "jam"=> [
                    ["subjudul"=>null,
                    "jam"=>"10:00 - Selesai"]   
                ],
                "isActive"=>true
            ]
                ];
        $accountbank = [
            "bank1" => [
                "id"=>"rek1",
                "bank"=>"BCA",
                "account"=> "7310222342",
                "acc_name"=> "Ajeng Elia Chrisdianti"
            ]
            ];
        $folderName = 'febri';
        $musicName = "/user/".$folderName."/bg-sound.mp3";
        $pathFileImg="/user/".$folderName."/assets/img/";
        $imgCarousel =[
            "slide1"=>[
                "img"=>"bg_riadi.png",
                "isActive"=>true
            ],
            "slide2"=>[
                "img"=>"bg_riadi.png",
                "isActive"=>false
            ]
            ];
         $emoney =[
            "emoney1"=>[
                "name"=>"DANA",
                "img"=>"qrcode2.jpeg",
                "isActive"=>false
            ]


         ];
         $storeRsvp = "febristore";
         $layouts =[
            "isSectionGiveActive"=>false,
            "isSectionGaleryActive"=>false,
            "isRsvpActive"=>true,
            "isEmoneyActive"=>false,
             "sectionLove"=>[
                "title"=>"We Found Love",
                "quote"=>"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan diantaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.",
                "isQuoteBlockActive"=>true,
                "quoteBlock"=>"QS Ar Rum Ayat 21"
             ]
         ];
         $profileCowo =[
            "nama"=> "Febri Santoso",
            "nick"=> "Febri",
            "ayah"=>"Surojo",
            "ibu"=>"Suparni (Alm)",
            "ig"=>null,
            "ig_link"=>"#",
            "foto" =>"profile-image-cowok.png"
        ];
         $profileCewe =[
            "nama"=> "Rakhmah Susanti",
            "nick"=> "Rakhmah",
            "ayah"=>"Soetopo (Alm)",
            "ibu"=>"Tini Kartini (Alm)",
            "ig"=>null,
            "ig_link"=>"#",
            "foto"=>"profile-image-cewek.png"
        ];
        $imgGalery = null;
        $modalimg = "bg_riadi.png";

        $name = str_replace(["+"], [" "],$name);
        return view('pages.user.ari.index',[

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
            "emoney"=>$emoney,
            "layouts"=>$layouts,
            "pathFileImg"=>$pathFileImg,
            "storeRsvp"=>$storeRsvp,
        
            "musicName"=>$musicName
           
        ]);
    }
    
    public function store(IsbyRequest $request){
        //
        $data = $request->all();
        ari::create($data);
        return redirect()->route('ari-success');



    }
    public function success(){
        return view('pages.user.ari.success');
    }
    public function dashboard(){

        $items = ari::all();

        return view('pages.user.ari.dashboard',[
            'items'=>$items
        ]);
    }


    public function getrsvp(){
        $items = ari::get();
        return json_encode(array('data'=>$items));
    }


    public function rsvp(Request $request){
             
        $items = ari::all();

            if($request->ajax()){
                
                return datatables()->of($items)->make(true);


            }
        return view('pages.user.ari.rsvp',compact('items'));
    }

    public function cetakpdf(){

        $items = ari::all();
    
        $pdf = PDF::loadview('layouts.user.data-rsvp_pdf',['items'=>$items])->setOptions(['defaultPaperSize'=>'a3']);
        return $pdf->download('laporan-data-rsvp.pdf');
    } 
}
