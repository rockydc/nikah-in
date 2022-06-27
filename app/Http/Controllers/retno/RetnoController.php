<?php

namespace App\Http\Controllers\retno;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User\retno as tia;
use App\Http\Requests\IsbyRequest;
use PDF;
class RetnoController extends Controller
{
    //
    public function index($name='rocky'){
        $items = tia::all();
        $owner = 'retno';
        $datapengantin = [
            "cowo"=>"Mirfak",
            "cewe"=>"Neno",
            "tgl"=>"29",
            "bln"=>"05",
            "thn"=>"22",
            "acara1"=>"Akad (Family Only)",
            "lagu"=>"Beautiful in white",
            "countdown"=>"May 29, 2022 08:00:00",
            "lokasi"=>"Aula Ahmad Yani Gedung Makodam Jaya,jl mayjen sutoyo no. 5 cawang Jakarta timur",
            "Map link pemberkatan"=> "https://goo.gl/maps/rHWQ43PZZwDB3mkr8",
            "tanggal"=>"29 Mei 2022",
            "jam akad"=>"08.00 - 10.00",
            "jam resepsi"=>"11.00 - 13.00 ",
            "lokasi resepsi" => "Aula Ahmad Yani Gedung Makodam Jaya,jl mayjen sutoyo no. 5 cawang Jakarta timur",
            "Map link resepsi"=> "https://goo.gl/maps/rHWQ43PZZwDB3mkr8",
            "map_link"=>"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0877558394077!2d106.86882021447572!3d-6.252167395474468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f303e2b35fb5%3A0x382f7e9d83e79728!2sAula%20Ahmad%20Yani%20Makodam%20Jaya!5e0!3m2!1sid!2sid!4v1652537578402!5m2!1sid!2sid",
            "tanggal resepsi"=> "Mei 29,2022",
            "ayat"=> "QS Ar Rum Ayat 21",
            "ayatsuci" => "  “ Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan diantaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.   “"
        ];
        $accountbank = [
            "bank1" => [
                "id"=>"rek1",
                "bank"=>"BCA",
                "account"=> "4210379725",
                "acc_name"=> "Retno Ayu Garini Kusumaw"
            ],
          
            ];
         $profileCowo =[
            "nama"=> "Mirfak Capella Saharlan",
            "nick"=> "Mirfak",
            "ayah"=>"La'nii",
            "ibu"=>"Waode Saharnani",
            "ig"=>null,
            "igurl"=>"#",
            "foto"=>"profile-cowo.png"
        ];
         $profileCewe =[
            "nama"=> "Retno Ayu Garini Kusumawardhani",
            "nick"=> "Neno",
            "ayah"=>"H. Djuprianto",
            "ibu"=>"Hj. Titi Adriati (Almh)",
            "ig"=>null,
            "igurl"=>"",
            "foto"=>"profile-cewe.png"
        ];
        $imgGalery = null;

        $carouselimg =[
            "1.jpg",
            "2.jpg",
            "3.jpg",
        ];
        $qrcode = "kertas.png";
        $modalimg = "1.jpg";
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
            'qrcode'=>$qrcode,
            'owner'=>$owner
        ]);
    }

    
    
    public function store(IsbyRequest $request){
        //
        $data = $request->all();
        tia::create($data);
        return redirect()->route('retno-success');



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

