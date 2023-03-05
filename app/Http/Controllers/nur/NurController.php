<?php

namespace App\Http\Controllers\nur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\Nur as ari;
class NurController extends Controller
{
    //
    public function index($name='rocky'){
        $items = ari::all();

        $datapengantin = [
            "cowo"=>"Aje",
            "cewe"=>"Ati",
            "tgl"=>"24",
            "bln"=>"12",
            "thn"=>"22",
            "lagu"=>"Shane Filan - Beautiful In White",
            "lokasi"=>"",
            "tanggal"=>"24 Desember, 2022",
            "countdown"=>"24 December, 2022 08:00:00",
            "jam akad"=>"09.00 WIB - Selesai",
            "map_link"=> "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1449640239343!2d106.9153173!3d-6.244619200000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698ccd822a3e39%3A0xadf87c33dc180fc6!2sJl.%20Dua%20Sembilan%20No.15%2C%20RT.7%2FRW.7%2C%20Duren%20Sawit%2C%20Kec.%20Duren%20Sawit%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013440!5e0!3m2!1sid!2sid!4v1667706113498!5m2!1sid!2sid",
        
        ];

        $sesi = [
            "sesi1"=>[
                "judul"=>"Akad",
                "lokasi"=>"Desa murni jaya rt 2 rw 1 kel. Murnijaya kecamatan Tumijajar kab tulang bawang barat provinsi Lampung ( sekitar belakang pabrik kripik pisang dwi putra ",
                "tanggal"=>"December 24, 2022",
                "jam"=>[
                    ["subjudul"=>null,
                    "jam"=>"09:00 - 10:00"]   
                ],
                "isActive"=>true
                ],
            "sesi2"=>[
                "judul" => "Resepsi",
                "lokasi"=> "Desa murni jaya rt 2 rw 1 kel. Murnijaya kecamatan Tumijajar kab tulang bawang barat provinsi Lampung ( sekitar belakang pabrik kripik pisang dwi putra ",
                "tanggal"=>"December 24, 2022",
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
                "account"=> "704323145700",
                "acc_name"=> "Muchamad Nur"
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
            "nama"=> "Muchamad Nur",
            "nick"=> "Bang Aje",
            "ayah"=>"Abdul Rochim(Alm)",
            "ibu"=>"Ani(Almh)",
            "ig"=>null,
            "ig_link"=>null,
            "foto" =>"profile-image-cowok.png"
        ];
         $profileCewe =[
            "nama"=> "Nurhidayati",
            "nick"=> "ati",
            "ayah"=>"Muskan",
            "ibu"=>null,
            "ig"=> null,
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
