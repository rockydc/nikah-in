<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\admin\DesainModel;
use App\Http\Requests\Adminhome\desainRequest;
class DesainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = DesainModel::all();
        
        
        return view('pages.admin-home.desain',
    
         ['items'=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         //
         $data = $request->all();
        
         $data['imgbg'] = $request->file('imgbg')->store(
             'backend/img/desain','public'
         );
         $data['imgprev'] = $request->file('imgprev')->store(
             'backend/img/desain','public'
         );
         $data['views'] = 0;
 
         DesainModel::create($data);
         return redirect()->route('desain.index');
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
    public function update(Request $request)
    {
        //
       
      
        $data = $request->all();
        $item = DesainModel::findOrFail($request->id);
        $data['imgbg'] = $request->file('imgbg')->store(
            'backend/img/desain','public'
        );
        $data['imgprev'] = $request->file('imgprev')->store(
            'backend/img/desain','public'
        );
        $item->update($data);

        return redirect()->route('desain.index');
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
          //
          $item= DesainModel::findOrFail($id);
          $item->delete();
          return redirect()->route('desain.index');
    }
}
