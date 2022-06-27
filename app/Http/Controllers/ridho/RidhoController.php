<?php

namespace App\Http\Controllers\ridho;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\ridho as Ridho;
use App\Http\Requests\IsbyRequest;
use PDF;
class RidhoController extends Controller
{
    //
    public function index($name='rocky'){
        $items = Ridho::all();

        $datapengantin = [
            "cowo"=>"Ridho",
            "cewe"=>"Tasya",
            "tgl"=>"21",
            "bln"=>"05",
            "thn"=>"22",
            "lagu"=>"Raef - You Are The One",
            "lokasi"=>"Perumahan Magnolia Residence Jl. Rasamala IV Blok IC No 57, Jatake, Jatiuwung, Tangerang",
            "tanggal"=>"Sabtu, 21 Mei 2022",
            "jam akad"=>"16:00 - 17:00 WIB",
            "map_link_akad"=> "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d655.2890939851264!2d114.76751809249433!3d-2.9806444610082288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de44e4bdf2e47d5%3A0x736faf193b2c11cb!2sJl.%20Veteran%20No.11%2C%20Marabahan%20Kota%2C%20Kec.%20Marabahan%2C%20Kabupaten%20Barito%20Kuala%2C%20Kalimantan%20Selatan%2070513!5e0!3m2!1sid!2sid!4v1651457620931!5m2!1sid!2sid",
            "map_link_resepsi"=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d655.2890939851264!2d114.76751809249433!3d-2.9806444610082288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de44e4bdf2e47d5%3A0x736faf193b2c11cb!2sJl.%20Veteran%20No.11%2C%20Marabahan%20Kota%2C%20Kec.%20Marabahan%2C%20Kabupaten%20Barito%20Kuala%2C%20Kalimantan%20Selatan%2070513!5e0!3m2!1sid!2sid!4v1651457620931!5m2!1sid!2sid",
            "jam resepsi"=>"17.00 - Selesai"
                 

        ];
        $sesi = [
            "sesi1"=>[
                "judul"=>"Akad Nikah",
                "lokasi"=>"Remaja Kuring Resto, Jl. Gatot Subroto KM 4,5, Jatiuwung, Sangiang Jaya, RT 001 RW 001 Sangiang Jaya, Kec. Periuk, Kota Tangerang, Banten",
                "tanggal"=>"Sabtu,21 Mei 2022",
                "map_link"=>"https://goo.gl/maps/G5pJiKUvLikn6hWH8",
                "jam"=>[
                    ["subjudul"=>null,
                    "jam"=>"15:00 - 17:00 WIB"]   
                ]],
            "sesi2"=>[
                "judul" => "Syukuran Pernikahan",
                "lokasi"=> " Remaja Kuring Resto, Jl. Gatot Subroto KM 4,5, Jatiuwung, Sangiang Jaya, RT 001 RW 001 Sangiang Jaya, Kec. Periuk, Kota Tangerang, Banten",
                "tanggal"=>"Sabtu,21 Mei 2022",
                "map_link"=>"https://goo.gl/maps/G5pJiKUvLikn6hWH8",
                "jam"=> [
                    ["subjudul"=>null,
                    "jam"=>"17:00 - Selesai"]   
                ]
            ]
                ];
        $accountbank = [
            "bank1" => [
                "id"=>"rek1",
                "bank"=>"OCBC NISP",
                "account"=> "397810058628",
                "acc_name"=> "Dianda Natasya"
            ]
            ];
        // $pathimg ="{{url('user/"."ridho"."/assets/img/".$filename."')}}";
         $emoney =[
             "name"=>"DANA",
             "img"=>"dana.png"
         ];
         $profileCowo =[
            "nama"=> "Ridho Kurniawan Saputra",
            "nick"=> "Ridho",
            "ayah"=>"Harun Al Rasyid",
            "ibu"=>"Yuli Murniati",
            "ig"=>"@riidhoks",
            "ig_link"=>"https://www.instagram.com/riidhoks/",
            "foto" =>"profile-image-cowok.png"
        ];
         $profileCewe =[
            "nama"=> "Dianda Natasya",
            "nick"=> "Tasya",
            "ayah"=>"Moch. Andriyan",
            "ibu"=>"Annette Natawijaya",
            "ig"=>"diandanatasya",
            "ig_link"=>"https://www.instagram.com/diandanatasya/",
            "foto"=>"profile-image-cewek.png"
        ];
        $imgGalery = [
            "5.jpg",
            "6.jpg",
            "3.jpg",
            "4.jpg",
            "1.jpg",
            "2.jpg",
            "7.jpg",
            "8.jpg"
        ];

        $modalimg = "1.jpg";
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
            "sesi"=>$sesi,
            "emoney"=>$emoney,
            "video"=>$video
           
        ]);
    }
    
    public function store(IsbyRequest $request){
        //
        $data = $request->all();
        Ridho::create($data);
        return redirect()->route('ridho-success');



    }
    public function success(){
        return view('pages.user.ridho.success');
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
             
        $items = Ridho::all();

            if($request->ajax()){
                
                return datatables()->of($items)->make(true);


            }
        return view('pages.user.ridho.rsvp',compact('items'));
    }

    public function cetakpdf(){

        $items = Ridho::all();
    
        $pdf = PDF::loadview('layouts.user.data-rsvp_pdf',['items'=>$items])->setOptions(['defaultPaperSize'=>'a3']);
        return $pdf->download('laporan-data-rsvp.pdf');
    }
}
