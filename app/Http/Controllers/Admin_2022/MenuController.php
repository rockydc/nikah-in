<?php

namespace App\Http\Controllers\Admin_2022;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\TmMenu;
use DB;
use Response;
use DataTables;

class MenuController extends Controller
{
    //
    public function index(){

    }
    private function renderActionMenuList($id){
        $output = '';
        $output .= "<a class='uk-button uk-button-small uk-button-primary' href='$id'>Edit</a>";
        $output .= "<form action='$id'><button class='uk-button uk-button-small uk-button-danger' type='submit'>delete</button></form>";
        return $output;
    }
    public function getMenuList(Request $request){
        $dbData = TmMenu::all();
        Return Datatables::of($dbData)
                ->addIndexColumn()
                ->addColumn('0', function($row){
                    return $row->menu_name;
                })
                ->addColumn('1', function($row){
                    return $row->slug ?? '#';
                })
                ->addColumn('2', function($row){
                    return $row->Parent->menu_name ?? '-';
                })
                ->addColumn('3', function($row){
                    return $row->icon ?? '-';
                })
                ->addColumn('4', function($row){
                    return $this->renderActionMenuList($row->id);
                })
                ->rawColumns(['4'])
                ->make(true);
    }
}
