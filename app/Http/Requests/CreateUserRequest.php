<?php

namespace App\Http\Requests;

class CreateUserRequest extends Request
{
    public function rules()
    {
        return [
            'username' => 'required|unique:users',
            'password' => 'required',
            'name' => 'required'
        ];
    }
}