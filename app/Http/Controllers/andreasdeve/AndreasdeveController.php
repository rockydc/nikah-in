<?php

namespace App\Http\Controllers\andreasdeve;
use App\Models\User\andreasdeve as andreasdeve;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\IsbyRequest;
use PDF;

class AndreasdeveController extends Controller
{

       public function index($name='rocky'){
        $items = andreasdeve::all();
        $datapengantin = [
            "cowo"=>"Andreas",
            "cewe"=>"Deve",
            "tgl"=>"26",
            "bln"=>"03",
            "thn"=>"22",
            "lagu"=>"Two Words by Lea Salonga",
            "lokasi"=>"GKI Kayu Putih Jl. Kayu Putih I Blok B Kav. 1 Jakarta 13260",
            "Map link pemberkatan"=> "https://goo.gl/maps/5hrk46L6EpzMYShB6",
            "tanggal"=>"26 Maret 2022",
            "jam akad"=>"11.00 - Selesai",
            "jam resepsi"=>"17.00 - Selesai ",
            "lokasi resepsi" => "Garden Terrace, Klub Kelapa Gading Jalan Boulevard Raya Blok KGC Kelapa Gading - Jakarta Utara 14240",
            "Map link resepsi"=> "https://goo.gl/maps/PPceB2UXpSZpwmWH9",
            "tanggal resepsi"=> "Maret 26,2022",
            "ayat"=> "Yohanes 15 : 12",
            "ayatsuci" => "  “ Inilah perintah-Ku: Kamu harus saling mengasihi, sama seperti Aku telah mengasihi kamu. “"
        ];
        $accountbank = [
            "bank1" => [
                "bank"=>"BCA",
                "account"=> "3422814334",
                "acc_name"=> "Firmanto Andreas"
            ],
            "bank2" => [
                "bank"=>"Mandiri",
                "account"=> "1190005171093",
                "acc_name"=> "Lisnawati"
            ]



            ];
         $profileCowo =[
            "nama"=> "Firmanto Andreas",
            "nick"=> "Andreas",
            "ayah"=>"Bambang Djenawi (Alm) ",
            "ibu"=>"Ivonne Yohana Laturiuw",
            "ig"=>"@firmanto_andreas",
            "igurl"=>"https://www.instagram.com/firmanto_andreas/"
        ];
         $profileCewe =[
            "nama"=> "Deve L. Tampubolon",
            "nick"=> "Deve",
            "ayah"=>"Hasan Abdul Gani Tampubolon",
            "ibu"=>"Remlis Pakpahan",
            "ig"=>"@deveqt",
            "igurl"=>"https://www.instagram.com/deveqt/"
        ];
        return view('pages.user.andreasdeve.index',[

            'items'=>$items,
            'name'=>$name,
            'datapengantin'=>$datapengantin,
            'profilecowo'=>$profileCowo,
            'profilecewe'=>$profileCewe,
            'accountbank'=>$accountbank
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
