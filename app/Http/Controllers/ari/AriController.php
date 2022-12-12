<?php

namespace App\Http\Controllers\ari;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\ari as ari;
use App\Http\Requests\IsbyRequest;
use PDF;
class AriController extends Controller
{
    //
    public function index($name='rocky'){
        $items = ari::all();

        $datapengantin = [
            "cowo"=>"Ari",
            "cewe"=>"Ajeng",
            "tgl"=>"06",
            "bln"=>"08",
            "thn"=>"22",
            "lagu"=>"ColdPlay - Up & Up",
            "lokasi"=>"Hotel Santika Teras Kota BSD. Jl. Pahlawan Seribu, Lengkong Gudang, Kec. Serpong, Kota Tangerang Selatan.",
            "tanggal"=>"6 August, 2022",
            "countdown"=>"6 August, 2022 11:00:00",
            "jam akad"=>"11.00 WIB - 13.00",
            "map_link"=> "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.756019256177!2d106.66619921471705!3d-6.295759895443431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb2f1177e8c5%3A0x4ef79a025e2fa9c7!2sHotel%20Santika%20BSD%20City%20-%20Serpong!5e0!3m2!1sid!2sid!4v1658498929986!5m2!1sid!2sid",
        
        ];

        $sesi = [
            "sesi1"=>[
                "judul"=>"Akad",
                "lokasi"=>"Hotel Santika Teras Kota BSD. Jl. Pahlawan Seribu, Lengkong Gudang, Kec. Serpong, Kota Tangerang Selatan.",
                "tanggal"=>"July 24, 2022",
                "jam"=>[
                    ["subjudul"=>null,
                    "jam"=>"09:00 - 10:00"]   
                ],
                "isActive"=>false
                ],
            "sesi2"=>[
                "judul" => "Resepsi",
                "lokasi"=> "Hotel Santika Teras Kota BSD. Jl. Pahlawan Seribu, Lengkong Gudang, Kec. Serpong, Kota Tangerang Selatan.",
                "tanggal"=>"August 06, 2022",
                "jam"=> [
                    ["subjudul"=>null,
                    "jam"=>"11:00 - 13:00"]   
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
        $folderName = 'ari';
        $musicName = "/user/".$folderName."/coldPlay-UpUp.mp3";
        $pathFileImg="/user/".$folderName."/assets/img/";
        $imgCarousel =[
            "slide1"=>[
                "img"=>"7.webp",
                "isActive"=>true
            ],
            "slide2"=>[
                "img"=>"3.webp",
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
         $storeRsvp = "aristore";
         $layouts =[
            "isSectionGiveActive"=>false,
            "isSectionGaleryActive"=>true,
            "isEmoneyActive"=>true,
             "sectionLove"=>[
                "title"=>"We Found Love",
                "quote"=>"And over all these virtues put on love, which binds them all together in perfect unity.",
                "isQuoteBlockActive"=>true,
                "quoteBlock"=>"Colossians 3:14"
             ]
         ];
         $profileCowo =[
            "nama"=> "Ari Indrajaya",
            "nick"=> "Ari",
            "ayah"=>"Roi Indrajaya",
            "ibu"=>"Tuminem",
            "ig"=>"@indrajayaari",
            "ig_link"=>"https://www.instagram.com/indrajayaari/",
            "foto" =>"profile-image-cowok.png"
        ];
         $profileCewe =[
            "nama"=> "Ajeng Elia Chrisdianti",
            "nick"=> "Ajeng",
            "ayah"=>"Pinudji Djansen",
            "ibu"=>"Wiwiek Hidajati",
            "ig"=>"@abigailajeng",
            "ig_link"=>"https://www.instagram.com/abigailajeng/",
            "foto"=>"profile-image-cewek.png"
        ];
        $imgGalery = [
            "1.webp",
            "2.webp",
            "3.webp",
            "4.webp",
            "5.webp",
            "6.webp",
            "7.webp",
            "8.webp"
          
        ];
        $modalimg = "7.webp";

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
