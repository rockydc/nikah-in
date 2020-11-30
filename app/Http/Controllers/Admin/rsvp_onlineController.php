<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\rsvp_online;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\rsvp_onlineRequest;

class rsvp_onlineController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        // $items = rsvp_online::all();
        // return view('pages.admin.rsvp.index',[
        //     'items'=> $items
        // ]);
        
        $items = rsvp_online::all();
            if($request->ajax()){
                return datatables()->of($items)->make(true);
            }
        return view('pages.admin.rsvp.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return rsvp_online::create([
            'nama'=>$data['nama'],
            'no_telepon'=>$data['no_telepon'],
            'email'=>$data['email'],
            'pesan'=>$data['pesan']
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(rsvp_onlineRequest $request)
    {
        //
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama+$request->email);

        // rsvp_online::create($data);
         rsvp_online::create($data);
        // return redirect()->route('anes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
