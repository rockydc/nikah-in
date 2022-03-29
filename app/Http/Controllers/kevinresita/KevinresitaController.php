<?php

namespace App\Http\Controllers\kevinresita;
use App\Http\Requests\IsbyRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\kevinresita as kevinresita;


class KevinresitaController extends Controller
{
    //
     //
     public function index($name='rocky'){
        $items = kevinresita::all();

        $datapengantin = [
            "cowo"=>"Kevin",
            "cewe"=>"Resita",
            "tgl"=>"27",
            "bln"=>"03",
            "thn"=>"22",
            "lagu"=>"Love Story - Taylor Swift (Cover by Eltasya Natasha ft. Indah Aqila)",
            "lokasi"=>"Keraton Ballroom,Hotel Swiss-Belinn Saripetojo, Solo",
            "tanggal"=>"March 27, 2022",
            "jam akad"=>"07.00 WIB - selesai",
            "map_link"=> "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1124008144848!2d110.79239151472443!3d-7.562722494546022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1431d75eba83%3A0xcf3e4a64ecd841db!2sSwiss-Belinn%20Saripetojo%20Solo!5e0!3m2!1sid!2sid!4v1647080576878!5m2!1sid!2sid",
            "jam resepsi"=>[
                 [
                "judul" => "Sesi 1",
                "jam"   => "10.00 - 11.00 WIB"
                 ],
                 [
                    "judul" => "Sesi 2",
                    "jam"   => "11.00 - 12.00 WIB"
                    ]
             
            ]
        ];
        $accountbank = [
            "bank1" => [
                "id"=>"rek1",
                "bank"=>"BCA",
                "account"=> "3750113027",
                "acc_name"=> "Kevin Adiyasa"
            ],
            "bank2" => [
                "id"=>"rek2",
                "bank"=>"Mandiri",
                "account"=> "1380009841235",
                "acc_name"=> "Resita Anggraini"
            ]



            ];
        // $pathimg ="{{url('user/"."kevinresita"."/assets/img/".$filename."')}}";

         $profileCowo =[
            "nama"=> "Kevin Adiyasa, S.E.",
            "nick"=> "Kevin",
            "ayah"=>" Letkol CBA (Purn) Amiwardi",
            "ibu"=>"(Almh) Maria Keni",
            "ig"=>"@kadiyasa",
            "ig_link"=>"cc",
            "foto" =>"ic-profile-cowo.png"
        ];
         $profileCewe =[
            "nama"=> "Resita Anggraini, S.E",
            "nick"=> "Sita",
            "ayah"=>"Supriyanto, B.Sc",
            "ibu"=>"Widyastuti, S.E.",
            "ig"=>"@rsitaanggraini",
            "ig_link"=>"cc",
            "foto"=>"ic-profile-cewe.png"
        ];
        $imgGalery = [
            "1.jpg",
            "2.jpg",
            "3.jpg",
            "4.jpg",
            "5.jpg",
            "6.jpg",
            "7.jpg",
            "8.jpg"
        ];

        $carouselimg =[
            "1.jpg",
            "2.jpg",
            "3.jpg",
        ];
        $modalimg = "2.jpg";

        $name = str_replace(["+"], [" "],$name);
        return view('pages.user.kevinresita.index',[

            'items'=>$items,
            'name'=>$name,
            'datapengantin'=>$datapengantin,
            'profilecowo'=>$profileCowo,
            'profilecewe'=>$profileCewe,
            'accountbank'=>$accountbank,
            'imggaleri'=>$imgGalery,
            'carouselimg'=>$carouselimg,
            'modalimg'=>$modalimg
           
        ]);
    }
    
    public function store(IsbyRequest $request){
        //
        $data = $request->all();
        kevinresita::create($data);
        return redirect()->route('kevinresita-success');



    }
    public function success(){
        return view('pages.user.kevinresita.success');
    }
    public function dashboard(){

        $items = kevinresita::all();

        return view('pages.user.kevinresita.dashboard',[
            'items'=>$items
        ]);
    }


    public function getrsvp(){
        $items = kevinresita::get();
        return json_encode(array('data'=>$items));
    }


    public function rsvp(Request $request){
             
        $items = kevinresita::all();

            if($request->ajax()){
                
                return datatables()->of($items)->make(true);


            }
        return view('pages.user.kevinresita.rsvp',compact('items'));
    }

    public function cetakpdf(){

        $items = kevinresita::all();
    
        $pdf = PDF::loadview('layouts.user.data-rsvp_pdf',['items'=>$items])->setOptions(['defaultPaperSize'=>'a3']);
        return $pdf->download('laporan-data-rsvp.pdf');
    } 
}
