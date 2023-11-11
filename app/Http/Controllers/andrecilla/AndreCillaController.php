<?php

namespace App\Http\Controllers\andrecilla;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\andrecilla as Ridho;
use App\Http\Requests\IsbyRequest;
use PDF;
class AndreCillaController extends Controller
{
    //
    public function index($name='rocky'){
        $items = Ridho::all();

        $datapengantin = [
            "cowo"=>"Andre",
            "cewe"=>"Cilla",
            "tgl"=>"2",
            "bln"=>"12",
            "thn"=>"23",
            "lagu"=>"Donne Maula - Bercinta Lewat Kata",
            "lokasi"=>"Gedung Pertemuan Graha Ceger",
            "tanggal"=>"Sabtu, 02 December 2023",
            "jam akad"=>"08.30 - 10.00                                     ",
            "map_link_akad"=> "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.266807718403!2d106.94145737581321!3d-6.22851246099994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c917cd9a381%3A0xf8654c8c2552302!2sGereja%20HKBP%20Ressort%20Pondok%20Kopi!5e0!3m2!1sid!2sid!4v1699274517684!5m2!1sid!2sid",
            "map_link_resepsi"=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6180055258196!2d106.88582707581413!3d-6.313807561788205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed6a748e9095%3A0x25244f1be353d1f!2sGedung%20Pertemuan%20Graha%20Ceger!5e0!3m2!1sid!2sid!4v1699274562176!5m2!1sid!2sid",
            "jam resepsi"=>"11.30 - Selesai",
            "countdown"=>"02 Dec, 2023 08:30:00"
                 

        ];
        $quote = [
            "Title"=>"Colossians 3:14-15",
            "Desc"=>" And over all these virtues put on love, which binds them all together in perfect unity. Let the peace of Christ rule in your hearts, since as members of one body you were called to peace. And be thankful. "
         ];
        $sesi = [
            "sesi1"=>[
                "judul"=>"Pemberkatan",
                "lokasi"=>"Gereja HKBP Pondok Kopi",
                "tanggal"=>"Sabtu,02 Desember 2023",
                "map_link"=>"https://maps.app.goo.gl/5n6v53FtJdLZ42L16",
                "jam"=>[
                    ["subjudul"=>null,
                    "jam"=>"08:00 - Selesai"]   
                ]],
            "sesi2"=>[
                "judul" => "Resepsi",
                "lokasi"=> "GEDUNG PERTEMUAN GRAHA CEGER",
                "tanggal"=>"Sabtu,02 Desember 2023",
                "map_link"=>"https://maps.app.goo.gl/WatWeQMUroabsheA7",
                "jam"=> [
                    ["subjudul"=>null,
                    "jam"=>"11:30 - Selesai"]   
                ],
                "isActive"=>true
            ]
                ];
        $accountbank = [
            "bank1" => [
                "id"=>"rek1",
                "bank"=>"BCA",
                "account"=> "6331055317",
                "acc_name"=> "Andre Yosua"
            ],
            "bank2" => [
                "id"=>"rek2",
                "bank"=>"Mandiri",
                "account"=> "1660001124882",
                "acc_name"=> "Andre Yosua"
            ]
            ];
        // $pathimg ="{{url('user/"."ridho"."/assets/img/".$filename."')}}";
         $emoney =[
             "name"=>"DANA",
             "img"=>"dana.png"
         ];
         $layouts = [
            "isGiftSectionActive" => true,
            "isSectionGaleryActive" => true,
            "isRsvpActive"=> true,
            "isAmplopSectionActive" => false
         ];
         $profileCowo =[
            "nama"=> "Andre Yosua, S.T.P",
            "nick"=> "Andre",
            "ayah"=>"Effendy Simanjuntak",
            "ibu"=>"Jusniar Tambunanarmi",
            "ig"=>"@andreyosuaa",
            "ig_link"=>"https://www.instagram.com/andreyosuaa/",
            "foto" =>"profile-image-cowok.png"
        ];
         $profileCewe =[
            "nama"=> "Priscilia D Mentari, S.T., M.Si",
            "nick"=> "Cilla",
            "ayah"=>"Ir. David Gurning",
            "ibu"=>"Marlina Tambunan, S.E.",
            "ig"=>"@lienpriscilia_cilladryastien",
            "ig_link"=>"https://www.instagram.com/priscilia_cilla/",
            "foto"=>"profile-image-cewek.png"
        ];
        $initialName = [
            "cowo"=>"A",
            "cewe"=>"C"
        ];
        $storeRsvp = 'andrecillastore';
        $imgGalery = [
            "1.webp",
            "2.webp",
            "3.webp",
            "4.webp",
            "5.webp",
            "6.webp",
            "7.webp",
        ];
        $folderName = 'andrecilla';
        $musicName = "/user/".$folderName."/Donne Maula  Bercinta Lewat Kata.mp3";
        $pathFileImg ="/user/".$folderName."/assets/img/";
        $scssFile = "/user/".$folderName."/assets/scss/style.css";
        $headerImg = '1.webp';
        $modalimg = "Foto Galeri 1.png";
        $video = "https://www.youtube.com/embed/T6xBOfQjlt0?rel=0";
        $qrcode = null;
        return view('pages.user.ridho.index',[

            'items'=>$items,
            'name'=>$name,
            'datapengantin'=>$datapengantin,
            'profilecowo'=>$profileCowo,
            'profilecewe'=>$profileCewe,
            'accountbank'=>$accountbank,
            'imggaleri'=>$imgGalery,
            'qrcode'=>$qrcode,
            'modalimg'=>$modalimg,
            'layouts'=>$layouts,
            "sesi"=>$sesi,
            "emoney"=>$emoney,
            'storeRsvp'=>$storeRsvp,
            "video"=>$video,
            "pathFileImg"=>$pathFileImg,
            'musicName'=>$musicName,
            'quote'=>$quote,
            'scssFile'=>$scssFile
            ,'initialName'=>$initialName
 
           
        ]);
    }
    
    public function store(IsbyRequest $request){
        //
        $data = $request->all();
        Ridho::create($data);
        return redirect()->route('andrecilla-success');



    }
    public function success(){
        $routeName = 'andrecilla';
        return view('pages.user.ridho.success',[
            "routeName"=>$routeName
        ]);
    }
    public function dashboard(){

        $items = Ridho::all();

        return view('pages.user.ridho.dashboard',[
            'items'=>$items
        ]);
    }


    public function getrsvp(){
        $items = Ridho::get();
        return json_encode(array('data'=>$items));
    }


    public function rsvp(Request $request){
             
        $items = getrsvp::all();
        $routeCetak = 'andrecillacetak';
        $routeRsvp = 'andrecillarsvp';
            if($request->ajax()){
                
                return datatables()->of($items)->make(true);
   
   
            }
        return view('pages.user.andreasdeve.rsvp',compact('items'),[
           "routeCetak"=>$routeCetak,
           "routeRsvp"=>$routeRsvp
        ]);
    }

    public function cetakpdf(){

        $items = Ridho::all();
    
        $pdf = PDF::loadview('layouts.user.data-rsvp_pdf',['items'=>$items])->setOptions(['defaultPaperSize'=>'a3']);
        return $pdf->download('laporan-data-rsvp.pdf');
    }
}

