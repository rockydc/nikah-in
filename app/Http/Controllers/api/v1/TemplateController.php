<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TemplateRequest;
use App\Models\Admin\TmTemplate;

class TemplateController extends Controller
{
    //
    public function create(TemplateRequest $request){
        $x = [
            'success' => false,
            'message' => '',
            'errors' => ''
        ];
        $code = 400;
        $data = $request->validated();
        $id = $data['id'];
        unset($data['id']);
        if($id == '-'){
            $model = TmTemplate::create($data);
            if($model){
                $x['message'] = 'Berhasil Menambahkan Data Template !';
                $x['success'] = true;
                $code = 201;
            }
        }else{
            $model = TmTemplate::find($id);
            if($model && $model->update($data)){
                $x['message'] = 'Berhasil Update Data Template !';
                $x['success'] = true;
                $code = 201;
            }
        }
        if($x['success'] == false && $id == '-'){
            $x['errors'] = 'Gagal Menambahkan data Template !';
        }
        if($x['success'] == false && $id != '-'){
            $x['errors'] = 'Gagal Update data Template !';
        }
        return response()->json($x,$code);
    }
    public function get(TmTemplate $data){
        return response()->json(['data' => $data, 'success' => true, 'errors' => []], 201);
    }
    public function delete(Request $request){
        $x = [
            'success' => false,
            'message' => '',
            'errors' => ''
        ];
        $code = 400;
        $id = $request->id;
        $model = TmTemplate::find($id);
        if($model){
            if($model->delete()){
                $x['message'] = 'Berhasil Menghapus Data Template';
                $x['success'] = true;
                $code = 201;
            }else{
                $x['errors'] = 'Gagal Menghapus Data Template';
            } 
        }else{
            $x['errors'] = 'Data Template Tidak Ditemukan';
        }
        return response()->json($x,$code);
    }
}
