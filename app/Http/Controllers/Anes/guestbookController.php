<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\guestbook_anes_model;
class guestbookController extends Controller
{
     public function index(Request $request)
    {
        //
        // $items = rsvp_online::all();
        // return view('pages.admin.rsvp.index',[
        //     'items'=> $items
        // ]);
        
        $items = guestbook_anes_model::all();
            if($request->ajax()){
                return datatables()->of($items)->make(true);
            }
        return view('pages.admin.guest_book.index',compact('items'));
    }
}
