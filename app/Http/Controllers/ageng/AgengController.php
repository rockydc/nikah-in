<?php

namespace App\Http\Controllers\ageng;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\Ageng as ari;
use App\Http\Requests\IsbyRequest;
use PDF;
class AgengController extends Controller
{
    //
    public function index($name='rocky'){
        $items = ari::all();

        $datapengantin = [
            "cowo"=>"Ageng",
            "cewe"=>"Miftah",
            "tgl"=>"04",
            "bln"=>"12",
            "thn"=>"22",
            "lagu"=>"Shane Filan - Beautiful In White",
            "lokasi"=>"Jalan 29 gg. Hj. Napsiah rt 9 rw 7",
            "tanggal"=>"04 Desember, 2022",
            "countdown"=>"04 December, 2022 08:00:00",
            "jam akad"=>"08.00 WIB - Selesai",
            "map_link"=> "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1449640239343!2d106.9153173!3d-6.244619200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698ccd822a3e39%3A0xadf87c33dc180fc6!2sJl.%20Dua%20Sembilan%20No.15%2C%20RT.7%2FRW.7%2C%20Duren%20Sawit%2C%20Kec.%20Duren%20Sawit%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013440!5e0!3m2!1sid!2sid!4v1667706113498!5m2!1sid!2sid",
        
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
                "isActive"=>true
                ],
            "sesi2"=>[
                "judul" => "Resepsi",
                "lokasi"=> "Jalan 29 gg. Hj. Napsiah rt 9 rw 7",
                "tanggal"=>"October 28, 2022",
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
                "bank"=>"BCA",
                "account"=> "3970076688",
                "acc_name"=> "Miftahul Jannah Ahyana Puteri Kharish"
            ]
            ];
        $folderName = 'ageng';
        $musicName = "/user/".$folderName."/Shane Filan - Beautiful In White.mp3";
        $pathFileImg="/user/".$folderName."/assets/img/";
        $imgCarousel =[
            "slide1"=>[
                "img"=>"1.jpeg",
                "isActive"=>true
            ],
            "slide2"=>[
                "img"=>"2.jpeg",
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
         $storeRsvp = "agengstore";
         $layouts =[
            "isSectionGiveActive"=>true,
            "isSectionGaleryActive"=>true,
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
            "nama"=> "Ageng Muhammad Wijayanto, S. Kom",
            "nick"=> "Ageng",
            "ayah"=>"Ibnu Supriyanto",
            "ibu"=>"Yuliati Ngesti Utami",
            "ig"=>"@agengmw",
            "ig_link"=>"https://www.instagram.com/agengmw/",
            "foto" =>"profile-image-cowok.png"
        ];
         $profileCewe =[
            "nama"=> "Miftahul Jannah Ahyana Puteri Kharisha, S.Kom",
            "nick"=> "Miftah",
            "ayah"=>"Sarmadi",
            "ibu"=>"Khairunnisah (Almh)",
            "ig"=>"@miftahuljahyanapk20",
            "ig_link"=>"https://www.instagram.com/miftahuljahyanapk20/",
            "foto"=>"profile-image-cewek.png"
        ];
        $imgGalery = [
            "1.jpeg",
            "4.jpeg",
            "3.jpeg",
            "5.jpeg",
            "2.jpeg",
            "7.jpeg",
            "6.jpeg",
          
        ];
        $modalimg = "1.jpeg";

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
        return redirect()->route('ageng-success');
    }
    public function success(){
        $routeName = "ageng";
     
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
