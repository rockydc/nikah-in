<?php

namespace App\Http\Requests\anes;

use Illuminate\Foundation\Http\FormRequest;

class RSVP extends FormRequest
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
        return [
            'name'=>'required|max:255',
            'no_telepon'=>'required|max:255',
            'email'=>'required',
            'pesan'=>'max:5000'
        ];
    }
}
