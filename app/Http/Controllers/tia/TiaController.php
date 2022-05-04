<?php

namespace App\Http\Controllers\tia;
use PDF;
use App\Http\Requests\IsbyRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\tia as tia;
class TiaController extends Controller
{
    //
    public function index($name='rocky'){
        $items = tia::all();
        $datapengantin = [
            "cowo"=>"Anda",
            "cewe"=>"Cyntia",
            "tgl"=>"09",
            "bln"=>"04",
            "thn"=>"22",
            "lagu"=>"Beautiful in white",
            "lokasi"=>"HKBP Pondok Ungu Permai",
            "Map link pemberkatan"=> "https://goo.gl/maps/fbaaaa26Q6V5V1AK7",
            "tanggal"=>"09 April 2022",
            "jam akad"=>"09.00 - Selesai",
            "jam resepsi"=>"13.00 - Selesai ",
            "lokasi resepsi" => "Gedung Graha Lestari",
            "Map link resepsi"=> "https://goo.gl/maps/LWQSMToMSKtyqyXv7",
            "tanggal resepsi"=> "April 09,2022",
            "ayat"=> "1 Tawarikh 17:27",
            "ayatsuci" => "  “ Kiranya Engkau sekarang berkenan memberkati keluarga hamba-Mu ini, supaya tetap ada di hadapan-Mu untuk selama-lamanya. Sebab apa yang Engkau berkati, ya TUHAN, diberkati untuk selama-lamanya.  “"
        ];
        $accountbank = [
            "bank1" => [
                "id"=>"rek1",
                "bank"=>"BCA",
                "account"=> "1940222130",
                "acc_name"=> "Hotlas Cyntia Maharani"
            ],
            "bank2" => [
                "id"=>"rek2",
                "bank"=>"BCA",
                "account"=> "5210790723",
                "acc_name"=> "Chandra Eliap Thirty"
            ],

            ];
         $profileCowo =[
            "nama"=> "Eliap Thirty Chandra Pasaribu",
            "nick"=> "Anda",
            "ayah"=>"(Alm) R.R.M Pasaribu",
            "ibu"=>" Rini Gloria Sihombing",
            "ig"=>"@anda.pasaribu",
            "igurl"=>"https://www.instagram.com/anda.pasaribu/",
            "foto"=>"profile-cowo.png"
        ];
         $profileCewe =[
            "nama"=> "Hotlas Cyntia Maharani",
            "nick"=> "Cyntia",
            "ayah"=>"Maruli H Siagian",
            "ibu"=>"Masra Simanjuntak",
            "ig"=>"@cyntiasiagian",
            "igurl"=>"https://www.instagram.com/cyntiasiagian/",
            "foto"=>"profile-cewe.png"
        ];
        $imgGalery = [
            "1.jpg",
            "2.jpg",
            "3.webp",
            "4.webp",
            "5.webp",
            "6.webp"
        ];

        $carouselimg =[
            "1.jpg",
            "2.jpg",
            "3.jpg",
        ];
        $qrcode = "kertas.png";
        $modalimg = "5.webp";
        $name = str_replace(["+"], [" "],$name);
        return view('pages.user.tia.index',[

            'items'=>$items,
            'name'=>$name,
            'datapengantin'=>$datapengantin,
            'profilecowo'=>$profileCowo,
            'profilecewe'=>$profileCewe,
            'accountbank'=>$accountbank,
            'carouselimg'=>$carouselimg,
            'modalimg'=>$modalimg,
            'imggaleri'=>$imgGalery,
            'qrcode'=>$qrcode
        ]);
    }

    
    
    public function store(IsbyRequest $request){
        //
        $data = $request->all();
        tia::create($data);
        return redirect()->route('tia-success');



    }
    public function success(){
        return view('pages.user.tia.success');
    }
    public function dashboard(){

        $items = tia::all();

        return view('pages.user.tia.dashboard',[
            'items'=>$items
        ]);
    }


    public function getrsvp(){
        $items = tia::get();
        return json_encode(array('data'=>$items));
    }


    public function rsvp(Request $request){
             
        $items = tia::all();

            if($request->ajax()){
                
                return datatables()->of($items)->make(true);


            }
        return view('pages.user.tia.rsvp',compact('items'));
    }
    public function cetakpdf(){

        $items = tia::all();
    
        $pdf = PDF::loadview('layouts.user.data-rsvp_pdf',['items'=>$items])->setOptions(['defaultPaperSize'=>'a3']);
        return $pdf->download('laporan-data-rsvp.pdf');
    } 
}
