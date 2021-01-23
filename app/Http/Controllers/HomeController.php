<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\admin\DesainModel;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.homepage');
    }

    public function getdata(){

        $items = DesainModel::orderBy('id','desc')
        ->skip(0)
        ->take(2)
        ->get();
        return json_encode(array('data'=>$items));
     
    }
}
