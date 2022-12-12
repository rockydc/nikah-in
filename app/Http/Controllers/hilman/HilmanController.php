<?php

namespace App\Http\Controllers\hilman;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\hilman as ari;
use App\Http\Requests\IsbyRequest;
use PDF;
class HilmanController extends Controller
{
    //
    public function index($name='rocky'){
        $items = ari::all();

        $datapengantin = [
            "cowo"=>"Hilman",
            "cewe"=>"Elsa",
            "tgl"=>"08",
            "bln"=>"09",
            "thn"=>"22",
            "lagu"=>"Celine Dion - The Power Of Love",
            "lokasi"=>"Gg H mukrim II No 70 Rt 05 /10 yayasan esa Qolbu kranji kec bekasi barat kota bekasi",
            "tanggal"=>"08 September, 2022",
            "countdown"=>"8 September, 2022 09:00:00",
            "jam akad"=>"09.00 WIB - Selesai",
            "map_link"=> "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2830338886483!2d106.97069141537003!3d-6.2263643627136185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c6f153d28b1%3A0xeeacd0cb702e5db7!2sYayasan%20Esa%20Qolbu!5e0!3m2!1sid!2sid!4v1661095671685!5m2!1sid!2sid",
        
        ];

        $sesi = [
            "sesi1"=>[
                "judul"=>"Akad",
                "lokasi"=>"Gg H mukrim II No 70 Rt 05 /10 yayasan esa Qolbu kranji kec bekasi barat kota bekasi",
                "tanggal"=>"September 08, 2022",
                "jam"=>[
                    ["subjudul"=>null,
                    "jam"=>"09:00 - Selesai"]   
                ],
                "isActive"=>true
                ],
            "sesi2"=>[
                "judul" => "Resepsi",
                "lokasi"=>"Gg H mukrim II No 70 Rt 05 /10 yayasan esa Qolbu kranji kec bekasi barat kota bekasi",
                "tanggal"=>"September 08, 2022",
                "jam"=> [
                    ["subjudul"=>null,
                    "jam"=>"11:00 - Selesai"]   
                ],
                "isActive"=>true
            ]
                ];
        $accountbank = [
            "bank1" => [
                "id"=>"rek1",
                "bank"=>"BJB",
                "account"=> "0067814800100",
                "acc_name"=> "Hilman Setia Raharja"
            ]
            ];
        $folderName = 'hilman';
        $musicName = "/user/".$folderName."/Céline Dion - The Power Of Love.mp3";
        $pathFileImg="/user/".$folderName."/assets/img/";
        $imgCarousel =[
            "slide1"=>[
                "img"=>"hilman-bg.jpg",
                "isActive"=>true
            ],
            "slide2"=>[
                "img"=>"2.jpg",
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
         $storeRsvp = "hilmanstore";
         $layouts =[
            "isSectionGiveActive"=>false,
            "isSectionGaleryActive"=>true,
            "isRsvpActive"=>false,
            "isEmoneyActive"=>true,
             "sectionLove"=>[
                "title"=>"We Found Love",
                "quote"=>"Dan diantara tanda-tanda kekuasaan-Nya ialah diciptakan Nya untukmu pasangan hidup dari jenismu sendiri supaya kamu mendapat ketenangan hati dan dijadikan-Nya kasih sayang diantara kamu. Sesungguhnya yang demikian menjadi tanda-tanda kebesaran-Nya bagi orang-orang yang berfikir..",
                "isQuoteBlockActive"=>true,
                "quoteBlock"=>"(Ar-Rum: 21)"
             ]
         ];
         $profileCowo =[
            "nama"=> "Hilman Setia Raharja SP.d MP.d",
            "nick"=> "Hilman",
            "ayah"=>"Tarya  SP.d MP.d",
            "ibu"=>"Sunengsih STr.Keb",
            "ig"=>"",
            "ig_link"=>"",
            "foto" =>"profile-image-cowok.png"
        ];
         $profileCewe =[
            "nama"=> "Anisa Aulia Aqsha",
            "nick"=> "Elsa",
            "ayah"=>"Arif Mufarik Spdi MSi",
            "ibu"=>"Suryani",
            "ig"=>"",
            "ig_link"=>"",
            "foto"=>"profile-image-cewek.png"
        ];
        $imgGalery = [
            "1.jpg",
            "2.jpg",
            "3.jpg",
            "4.jpg"
          
        ];
        $modalimg = "1.jpg";

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
