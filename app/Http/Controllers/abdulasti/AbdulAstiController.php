<?php

namespace App\Http\Controllers\abdulasti;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\abdulasti as ari;
use App\Http\Requests\IsbyRequest;
use PDF;
class AbdulAstiController extends Controller
{
    //
    public function index($name='rocky'){
        $items = ari::all();

        $datapengantin = [
            "cowo"=>"Abdul",
            "cewe"=>"Asti",
            "tgl"=>"23",
            "bln"=>"01",
            "thn"=>"23",
            "lagu"=>"Shane Filan - Beautiful In White",
            "lokasi"=>"Restoran Saung Wulan Tambun Bekasi",
            "tanggal"=>"23 Januari, 2023",
            "countdown"=>"23 January, 2023 10:00:00",
            "jam akad"=>"08.00 WIB - Selesai",
            "map_link"=> "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9697932556796!2d107.0546768!3d-6.267703099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6991e7790d1c47%3A0xde51ed548d4b435c!2sRestoran%20Saung%20Wulan%20Tambun%20Bekasi!5e0!3m2!1sid!2sid!4v1674179373287!5m2!1sid!2sid",
        
        ];

        $sesi = [
            "sesi1"=>[
                "judul"=>"Akad",
                "lokasi"=>"Jalan 29 gg. Hj. Napsiah rt 9 rw 7",
                "tanggal"=>"December 04, 2022",
                "jam"=>[
                    ["subjudul"=>null,
                    "jam"=>"08:00 - Selesai"]   
                ],
                "isActive"=>false
                ],
            "sesi2"=>[
                "judul" => "Resepsi",
                "lokasi"=> "Restoran Saung Wulan Tambun Bekasi",
                "tanggal"=>"January 23, 2023",
                "jam"=> [
                    ["subjudul"=>null,
                    "jam"=>"10:00 - 12:00"]   
                ],
                "isActive"=>true
            ]
                ];
        $accountbank = [
            "bank1" => [
                "id"=>"rek1",
                "bank"=>"BCA",
                "account"=> "6590178835",
                "acc_name"=> "Asti Liana"
            ]
            ];
        $folderName = 'abdulasti';
        $musicName = "/user/".$folderName."/Shane Filan - Beautiful In White.mp3";
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
                "name"=>"Offline Gift",
                "img"=>"qrcode2.jpeg",
                "isActive"=>false
            ]


         ];
         $storeRsvp = "abdulastistore";
         $specialNote = "We're excited to invite you to an intimate gathering! To make sure we have a great time together, we kindly ask that you fill out a registration form before joining us. Thank you and we can't wait to see you!";
         $layouts =[
            "isSectionGiveActive"=>true,
            "isSectionGaleryActive"=>false,
            "isRsvpActive"=>true,
            "isEmoneyActive"=>true,
             "sectionLove"=>[
                "title"=>"We Found Love",
                "quote"=>"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan diantaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.",
                "isQuoteBlockActive"=>true,
                "quoteBlock"=>"QS Ar Rum Ayat 21"
             ]
         ];
         $profileCowo =[
            "nama"=> "Mohammad Abdul Aziz",
            "nick"=> "Abdul",
            "ayah"=>"Edy Mulyo Sutopo",
            "ibu"=>"Suprihatin",
            "ig"=>null,
            "ig_link"=>null,
            "foto" =>"profile-image-cowok.png"
        ];
         $profileCewe =[
            "nama"=> "Asti liana putri",
            "nick"=> "Asti",
            "ayah"=>"Arifin Z",
            "ibu"=>"Ainama",
            "ig"=>null,
            "ig_link"=>null,
            "foto"=>"profile-image-cewek.png"
        ];
        $imgGalery = [];
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
            "specialNote"=>$specialNote,
            "pathFileImg"=>$pathFileImg,
            "storeRsvp"=>$storeRsvp,
        
            "musicName"=>$musicName
           
        ]);
    }
    
    public function store(IsbyRequest $request){
        //
        $data = $request->all();
        ari::create($data);
        return redirect()->route('abdulasti-success');
    }
    public function success(){
        $routeName = "abdulasti";
     
        return view('pages.user.ari.success',[
            "routeName"=>$routeName
        ]);
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

