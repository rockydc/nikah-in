<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserDetailRequest;

use App\User;
use App\Models\NikahinUserDetail;
use Carbon\Carbon as carbon;
class UserController extends Controller
{
    //
    public function list(){
        $data = User::all();
        return response()->json(['data' => $data],200);
    }
    public function create(UserRequest $user,UserDetailRequest $detail){
        $data = $user->validated();
        $id = '-';
        if($data['id'] == '-'){
            unset($data['id']);
            $data['password'] = bcrypt($data['password']);
            $model = User::create($data);
            
        }else{
            $id = $data['id'];
            unset($data['id']);
            if($data['password'] == ''){
                unset($data['password']);
            }else{
                $data['password'] = bcrypt($data['password']); 
            }
            $model = User::find($id);
            $model->update($data);
        }
        if($model){
            $detailData = $detail->validated();
            $detailData['user_name'] = $detail['name'];
            unset($detailData['name']);
            $detailData['user_id'] = $model->id;
            if($id == '-'){
                $detailData['created_at'] = carbon::now();
            }
            $detailData['updated_at'] = carbon::now();
            $check = NikahinUserDetail::where('user_id',$model->id)->get();
            $saveResult = false;
            $msg = 'Data User Berhasil Ditambahkan';
            if(!empty($check)){
                $detailModel = NikahinUserDetail::where('user_id', $model->id)->first();
                $saveResult = $detailModel->update($detailData);
                $msg = 'Data User Berhasil Diupdate';

            }else{
                $detailModel = new NikahinUserDetail;
                $saveResult = $detailModel->insert($detailData);
            }
            if($saveResult){
                return response()->json(['success' => true, 'message' => $msg, 'error' => []]);
            }
        }

        return response()->json(['data' => $data]);
    }
    public function delete(Request $request){
        $id = $request->id;
        $model = User::find($id);
        if($model){
            $model->user_status = '0';
            $model->save();
        }else{
            return response()->json(['error' => 'Data User Tidak Ditemukan']);
        }
        return response()->json(['success' => true, 'message' => 'Berhasil Menghapus Data User'], 201);
    }
}
