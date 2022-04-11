<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Models\TsUserRole;
use Validator;

class authController extends Controller
{
    //
    public function authenticate(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|string'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }
        $token = auth('api')->attempt($validator->validated());
        if(!$token){
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $this->createNewToken($token);
    }
    public function logout(){
        auth('api')->logout();
        return response()->json(['message' => 'User Succesfully Signed Out']);
    }
    public function refresh(){
        return $this->createNewToken($token);
    }
    public function createNewToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60 * 3,
            'user' => auth('api')->user(),
            'role' => auth('api')->user()->roleUser
        ]);
    }
    public function userProfile(){
        return response()->json(array_merge(
            auth('api')->user()->toArray(),
            ['roles' => auth('api')->user()->roleUser]
        ));
    }
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|string|unique:users',
            'password' => 'required|string|confirmed|min:6'
        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }
        $user = User::create(array_merge(
            $validator->validated(),
            ['password' => bcrypt($request->password)]
        ));
        $role = TsUserRole::create([
            'user_id' => $user->id,
            'role_id' => 1
        ]);
        return response()->json([
            'message' => 'User Successfully Registered'
        ], 201);
    }
}
