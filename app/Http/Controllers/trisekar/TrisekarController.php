<?php

namespace App\Http\Controllers\trisekar;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\trisekar as Ridho;
use App\Http\Requests\IsbyRequest;
use PDF;
class TrisekarController extends Controller
{
    //
    public function index($name='rocky'){
        $items = Ridho::all();

        $datapengantin = [
            "cowo"=>"Tri",
            "cewe"=>"Sekar",
            "tgl"=>"25",
            "bln"=>"11",
            "thn"=>"23",
            "lagu"=>"Brian McKnight Jr - Marry Your Daughter",
            "lokasi"=>"GKJ SERPONG",
            "tanggal"=>"Sabtu, 21 Mei 2022",
            "jam akad"=>"16:00 - 17:00 WIB",
            "map_link_akad"=> "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d655.2890939851264!2d114.76751809249433!3d-2.9806444610082288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de44e4bdf2e47d5%3A0x736faf193b2c11cb!2sJl.%20Veteran%20No.11%2C%20Marabahan%20Kota%2C%20Kec.%20Marabahan%2C%20Kabupaten%20Barito%20Kuala%2C%20Kalimantan%20Selatan%2070513!5e0!3m2!1sid!2sid!4v1651457620931!5m2!1sid!2sid",
            "map_link_resepsi"=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d655.2890939851264!2d114.76751809249433!3d-2.9806444610082288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de44e4bdf2e47d5%3A0x736faf193b2c11cb!2sJl.%20Veteran%20No.11%2C%20Marabahan%20Kota%2C%20Kec.%20Marabahan%2C%20Kabupaten%20Barito%20Kuala%2C%20Kalimantan%20Selatan%2070513!5e0!3m2!1sid!2sid!4v1651457620931!5m2!1sid!2sid",
            "jam resepsi"=>"17.00 - Selesai",
            "countdown"=>"25 Nov, 2023 09:00:00"
                 

        ];
        $quote = [
            "Title"=>"Colossians 3:14-15",
            "Desc"=>" And over all these virtues put on love, which binds them all together in perfect unity. Let the peace of Christ rule in your hearts, since as members of one body you were called to peace. And be thankful. "
         ];
        $sesi = [
            "sesi1"=>[
                "judul"=>"Pemberkatan",
                "lokasi"=>"GKJ SERPONG",
                "tanggal"=>"Sabtu,21 Mei 2022",
                "map_link"=>"https://goo.gl/maps/z9GpSeZiZt34ofFp6",
                "jam"=>[
                    ["subjudul"=>null,
                    "jam"=>"09:00 - Selesai"]   
                ]],
            "sesi2"=>[
                "judul" => "Syukuran Pernikahan",
                "lokasi"=> " Remaja Kuring Resto, Jl. Gatot Subroto KM 4,5, Jatiuwung, Sangiang Jaya, RT 001 RW 001 Sangiang Jaya, Kec. Periuk, Kota Tangerang, Banten",
                "tanggal"=>"Sabtu,21 Mei 2022",
                "map_link"=>"https://goo.gl/maps/G5pJiKUvLikn6hWH8",
                "jam"=> [
                    ["subjudul"=>null,
                    "jam"=>"17:00 - Selesai"]   
                ],
                "isActive"=>false
            ]
                ];
        $accountbank = [
            "bank1" => [
                "id"=>"rek1",
                "bank"=>"BCA",
                "account"=> "6970234916",
                "acc_name"=> "Sekar Astien R."
            ],
            "bank2" => [
                "id"=>"rek2",
                "bank"=>"Mandiri",
                "account"=> "1760001685278",
                "acc_name"=> "Tri Atmadi"
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
            "nama"=> "Tri Atmadi",
            "nick"=> "Try",
            "ayah"=>"Sumidi",
            "ibu"=>"Sutarmi",
            "ig"=>"@chalderon_try",
            "ig_link"=>"https://www.instagram.com/chalderon_try/",
            "foto" =>"profile-image-cowok.png"
        ];
         $profileCewe =[
            "nama"=> "Sekar Astien R.",
            "nick"=> "Liendry",
            "ayah"=>"Andreas Yoni S.",
            "ibu"=>"Treetien Suwarsi B. R.",
            "ig"=>"@liendryastien",
            "ig_link"=>"https://www.instagram.com/liendryastien/",
            "foto"=>"profile-image-cewek.png"
        ];
        $storeRsvp = 'trisekarstore';
        $imgGalery = [
            "1.png",
            "2.jpg",
            "3.jpg",
            "4.jpg",
            "9.jpg",
            "11.jpg",
            "12.jpg",
            "16.jpg",
            "18.jpg"
        ];
        $folderName = 'trisekar';
        $musicName = "/user/".$folderName."/Brian McKnight Jr-Marry Your Daughter.mp3";
        $pathFileImg ="/user/".$folderName."/assets/img/";
        $scssFile = "/user/".$folderName."/assets/scss/style.css";
        $headerImg = '17.JPG';
        $modalimg = "17.JPG";
        $video = null;
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
            'quote'=>$quote
 
           
        ]);
    }
    
    public function store(IsbyRequest $request){
        //
        $data = $request->all();
        Ridho::create($data);
        return redirect()->route('trisekar-success');



    }
    public function success(){
        $routeName = 'trisekar';
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
        $routeCetak = 'trisekarcetak';
        $routeRsvp = 'trisekarrsvp';
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
