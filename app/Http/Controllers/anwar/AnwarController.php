<?php

namespace App\Http\Controllers\anwar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\anwar as anwar;
use App\Http\Requests\IsbyRequest;
use PDF;

class AnwarController extends Controller
{

    public function index($name='rocky'){
     $items = anwar::all();
     $datapengantin = [
         "cowo"=>"Anwar",
         "cewe"=>"Chacha",
         "tgl"=>"14",
         "bln"=>"05",
         "thn"=>"23",
         "lagu"=>"Janji kita",
         "lokasi"=>"Gor Kebon jeruk",
         "Map link pemberkatan"=> "https://goo.gl/maps/pX8wPTK8Lgrt22Hu7",
         "tanggal"=>"14 Mei 2023",
         "jam akad"=>"08.00 - Selesai",
         "jam resepsi"=>"10.00 - Selesai ",
         "lokasi resepsi" => "Gor Kebon jeruk",
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
    $musicName = "/user/".$folderName."/Nuca & Mahalini - Janji Kita.mp3";
    $pathFileImg ="/user/".$folderName."/assets/img/";
    $scssFile = "/user/".$folderName."/assets/scss/style.css";
    $headerImg = '1.jpg';
    $imgGalery = [
        "1.jpg",
        "2.jpg",
        "3.jpg",
        "5.jpg",
        "6.jpg",
        "7.jpg",
        "8.jpg"
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
         "nama"=> "Anwar Hidayat, S.E",
         "nick"=> "Anwar",
         "ayah"=>"Sobirin",
         "ibu"=>"Nunung",
         "ig"=>"@anwar_hidayaat",
         "igurl"=>"https://www.instagram.com/anwar_hidayaat/",
         "foto"=>"profile-cowo.png"
     ];
     $storeRsvp = 'anwarstore';
      $profileCewe =[
         "nama"=> "Siti nurhaliza",
         "nick"=> "Chacha",
         "ayah"=>"Ucung sobirin",
         "ibu"=>"Renny",
         "ig"=>"@chacha292929",
         "igurl"=>"https://www.instagram.com/chacha292929/",
         "foto"=>"profile-cewe.png"
     ];
     $layouts = [
        "isGiftSectionActive" => true,
        "isSectionGaleryActive" => true,
        "isRsvpActive"=> true,
        "isAmplopSectionActive" => false
     ];
     $user_agent = $_SERVER['HTTP_USER_AGENT'];
     $isMobile = preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $user_agent);
     $isTablet =  preg_match('/(tablet|ipad|playbook|silk)|(android(?!.*mobile))/i', $user_agent);
     $imgMobileSectionLove = '';
     $imgCountdown = '';
     $imgStorylove = '';
     if($isMobile || $isTablet == true ){
        $imgCountdown = 'countdown-bg-mobile.png';
        $imgStorylove = 'story-mobile.png';
        $headerImg = '1.jpg';
     }else {
        $imgStorylove = 'story.png';
        $headerImg = '1.jpg';
        $imgCountdown = 'countdown-bg.png';
     }

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
         'storeRsvp'=>$storeRsvp,
         'layouts'=>$layouts,
         'imgMobileSectionLove'=>$imgMobileSectionLove,
         'imgStorylove'=>$imgStorylove,
         'imgCountdown'=>$imgCountdown,
         'headerImg'=>$headerImg,
         'scssFile'=>$scssFile
     ]);
 }

 
 
 public function store(IsbyRequest $request){
     //
     $data = $request->all();
     anwar::create($data);
     return redirect()->route('anwar-success');



 }
 public function success(){
    $routeName = 'anwar';
     return view('pages.user.andreasdeve.success',[
        "routeName"=>$routeName
    ]);
 }
 public function dashboard(){

     $items = anwar::all();

     return view('pages.user.anwar.dashboard',[
         'items'=>$items
     ]);
 }


 public function getrsvp(){
     $items = anwar::get();
     return json_encode(array('data'=>$items));
 }


 public function rsvp(Request $request){
          
     $items = anwar::all();
     $routeCetak = 'anwarcetak';
     $routeRsvp = 'anwarrsvp';
         if($request->ajax()){
             
             return datatables()->of($items)->make(true);


         }
     return view('pages.user.andreasdeve.rsvp',compact('items'),[
        "routeCetak"=>$routeCetak,
        "routeRsvp"=>$routeRsvp
     ]);
 }
 public function cetakpdf(){

     $items = anwar::all();
 
     $pdf = PDF::loadview('layouts.user.data-rsvp_pdf',['items'=>$items])->setOptions(['defaultPaperSize'=>'a3']);
     return $pdf->download('laporan-data-rsvp.pdf');
 } 
}
