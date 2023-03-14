<?php

namespace App\Http\Controllers\anwar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\andreasdeve as andreasdeve;
use App\Http\Requests\IsbyRequest;
use PDF;
class AnwarController extends Controller
{

    public function index($name='rocky'){
     $items = andreasdeve::all();
     $datapengantin = [
         "cowo"=>"Anwar",
         "cewe"=>"Siti",
         "tgl"=>"14",
         "bln"=>"05",
         "thn"=>"23",
         "lagu"=>"Janji kita",
         "lokasi"=>"No., Jl. HH No.14, RT.8/RW.1, Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530",
         "Map link pemberkatan"=> "https://goo.gl/maps/pX8wPTK8Lgrt22Hu7",
         "tanggal"=>"14 Mei 2023",
         "jam akad"=>"08.00 - Selesai",
         "jam resepsi"=>"10.00 - Selesai ",
         "lokasi resepsi" => "No., Jl. HH No.14, RT.8/RW.1, Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530",
         "Map link resepsi"=> "https://goo.gl/maps/pX8wPTK8Lgrt22Hu7",
         "tanggal resepsi"=> "Maret 26,2022",
         "ayat"=> "QS Ar Rum Ayat 21",
         "ayatsuci" => "“ Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan diantaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir. “",
         "countdown"=>"14 May, 2023 08:00:00",
     ];
     $quote = [
        "Title"=>"Yohanes 15 : 12",
        "Desc"=>"lorem ipsum kadoeoad a;lsdk;sakd;asdpo"
     ];
     $sesi = [
        "sesi1"=>[
            "judul"=>"Akad",
            "lokasi"=>"-",
            "tanggal"=>"May 14, 2023",
            "jam"=>[
                "subjudul"=>null,
                "jam"=>"08:00"
            ]
            ],
            "sesi2"=>[
                "judul"=>"Resepsi",
                "lokasi"=>"-",
                "tanggal"=>"May 14, 2023",
                "jam"=>[
                    "subjudul"=>null,
                    "jam"=>"10:00"
                ]
            ]
            ];
    $folderName = 'anwar';
    $musicName = "/user/".$folderName."/test.mp3";
    $pathFileImg ="/user/".$folderName."/assets/img/";
    $imgGalery = [
        "1.jpg",
        "2.jpg",
    ];
    $modalimg = '1.jpg';
     $accountbank = [
         "bank1" => [
             "bank"=>"BRI",
             "account"=> "324401017997532",
             "acc_name"=> "Anwar hidayat"
         ]



         ];
      $profileCowo =[
         "nama"=> "Anwar Hidayat",
         "nick"=> "Anwar",
         "ayah"=>"Sobirin",
         "ibu"=>"Nunung",
         "ig"=>"@anwar_hidayaat",
         "igurl"=>"https://www.instagram.com/anwar_hidayaat/",
         "foto"=>"profile-cowo.png"
     ];
     $storeRsvp = 'anwar-store';
      $profileCewe =[
         "nama"=> "Siti nurhaliza",
         "nick"=> "Chacha",
         "ayah"=>"Ucung sobirin",
         "ibu"=>"Renny",
         "ig"=>"@chacha292929",
         "igurl"=>"https://www.instagram.com/chacha292929/",
         "foto"=>"profile-cewe.png"
     ];

     $name = str_replace(["+"], [" "],$name);
     return view('pages.user.andreasdeve.index',[

         'items'=>$items,
         'name'=>$name,
         'datapengantin'=>$datapengantin,
         'profilecowo'=>$profileCowo,
         'profilecewe'=>$profileCewe,
         'accountbank'=>$accountbank,
         'sesi'=>$sesi,
         'modalimg'=>$modalimg,
         'imggaleri'=>$imgGalery,
         'quote'=>$quote,
         'pathFileImg'=>$pathFileImg,
         'musicName'=>$musicName,
         'storeRsvp'=>$storeRsvp
     ]);
 }

 
 
 public function store(IsbyRequest $request){
     //
     $data = $request->all();
     andreasdeve::create($data);
     return redirect()->route('andreasdeve-success');



 }
 public function success(){
     return view('pages.user.andreasdeve.success');
 }
 public function dashboard(){

     $items = andreasdeve::all();

     return view('pages.user.andreasdeve.dashboard',[
         'items'=>$items
     ]);
 }


 public function getrsvp(){
     $items = andreasdeve::get();
     return json_encode(array('data'=>$items));
 }


 public function rsvp(Request $request){
          
     $items = andreasdeve::all();

         if($request->ajax()){
             
             return datatables()->of($items)->make(true);


         }
     return view('pages.user.andreasdeve.rsvp',compact('items'));
 }
 public function cetakpdf(){

     $items = andreasdeve::all();
 
     $pdf = PDF::loadview('layouts.user.data-rsvp_pdf',['items'=>$items])->setOptions(['defaultPaperSize'=>'a3']);
     return $pdf->download('laporan-data-rsvp.pdf');
 } 
}
