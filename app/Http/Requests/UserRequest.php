<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if($this->id == '-'){
            return [
                //
                'id' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required|string|min:6',
                'user_status' => 'required',
                'user_type' => 'required',
                'name' => 'required'
            ];
        }else{
            return [
                //
                'id' => 'required',
                'password' => 'string',
                'user_status' => '',
                'user_type' => '',
                'name' => ''
            ];
        }

    }
}
