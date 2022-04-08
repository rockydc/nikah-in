<?php

namespace App\Http\Controllers\Admin_2022;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(){
        return view('livewire.app');
    }
}
