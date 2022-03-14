<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\profile;
use Auth;
use str;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auths.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/perjalanan');
        }
            return redirect('/login');
    }

    public function postRegister(Request $request)
    {
        user::create([
            'nik' =>$request->nik,
            'name' =>$request->name,
            'telp' =>$request->telp,
            'id_kota',
            'email' =>$request->email,
            'foto',
            'username' =>$request->username,
            'password' =>bcrypt($request->password),
            'remember_token' =>str_random(60)
        ]);
            return redirect('/login');
    }

        public function logout()
        {
        Auth::logout();

        return redirect('/login');
        }
}
