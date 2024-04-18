<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function getLogin()
    {
        return view('auth.login');
    }

    public function getRegister()
    {
        return view('auth.register');
    }

    public function postRegister(request $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' =>$request['password'],
        ]);
        return redirect('thanks');
    }

    public function postlogin()
    {
        return view('index');
    }

    public function thanks()
    {
        return view('thanks');
    }
}