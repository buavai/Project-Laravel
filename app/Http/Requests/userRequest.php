<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
            'mail_address'=>'email|required|max:100|unique:users_admins,mail_address',
            'password'=>'required|max:255',
            'addresss'=>'max:255',
            'number'=>'required|integer|max:15',
            'password-confirm'=>'required|same:password',
        ];
    }   
}
