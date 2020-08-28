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
        return [
            'fullname' => 'required|string|max:100|min:3',
            'username' => 'required|unique:users,username|max:100|min:3',
            'password' => 'required|max:100|min:8',
            'email'    => 'required|email|unique:users,email',
            'avatar'   => 'sometimes|nullable'
        ];
    }

    public function messages()
    {
        return [
            'required'  => 'This field is required',
            'max'       => 'This field is very long',
            'min'       => 'This field is very small',
            'email.email'   => 'Email incorrect',
            'fullname.string'   => 'Full name must have alphabetic caracters',
            'username.unique'   => 'Username is already exist',
            'email.unique'   => 'email is already exist',
        ];
    }
}