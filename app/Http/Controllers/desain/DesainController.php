<?php

namespace App\Http\Controllers\desain;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\admin\DesainModel;

class DesainController extends Controller
{
    //
    public function index(){

      
        return view('pages.desain');
    }

    public function getdata(){

        $items = DesainModel::get();
        return json_encode(array('data'=>$items));
    }
    public function preview(Request $request, $nama,$views){

        $items = DesainModel::all()
        ->where('nama',$nama);
        
        
        $data = DesainModel::where('nama',$nama)->update(array('views'=>$views+1));
     
        return view('pages.previewpage',[
            'items'=>$items
        ]);
    }
    public function template($nama){
        $items = DesainModel::all()
        ->where('nama',$nama);

        return view("layouts.template.".$nama);
    }
    
}

 