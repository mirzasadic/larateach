<?php

namespace App\Http\Controllers;


use App\Http\Requests\CreateUserRequest;
use App\User;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function home()
    {
        return view('user.home');
    }

    public function getLogin()
    {
        return view('user.login');
    }

    public function postLogin()
    {
        $data = Input::only([
            'username',
            'password'
        ]);

        $user = User::where('username', '=', $data['username'])
            ->where('password', '=', $data['password'])
            ->first();

        return redirect('home');
    }

    public function getRegister()
    {
        return view('user.register');
    }

    public function postRegister(CreateUserRequest $createUserRequest)
    {
        User::create(Input::only([
            'name',
            'username',
            'password'
        ]));

        return redirect('login');
    }

}
