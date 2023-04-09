<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function registrasi(){
        return view('guest.registrasi');
    }
    public function register(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:user',
            'password' => 'required|required|min:6|max:255',
            'ulangi_password' => 'required|required|min:6|max:255',
            'no_telp' => 'required|numeric',
        ]);
        $validateData['password'] = bcrypt($validateData['password']);
        return redirect('/login')->with('sukses', 'Registrasi berhasil! silahkan login!');

    }
}
