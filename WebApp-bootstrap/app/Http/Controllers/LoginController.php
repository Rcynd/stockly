<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Support\ValidatedData;
use illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('guest.login',[
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Email atau Password Salah!');

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function registrasi(){
        return view('guest.registrasi');
    }
    public function register(Request $request){
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6|max:255|confirmed',
            'no_telp' => 'required|numeric|unique:users',
            'level' => 'required'
        ],[
            'email.unique' => 'email yang anda masukkan sudah terdaftar!',
            'password.min' => 'password minimal berisi 6 karakter!',
            'password.confirmed' => 'Konfirmasi Password harus sama dengan Password!',
            'no_telp.numeric' => 'nomor telepon harus berisi angka!',
        ]);
        $validateData['password'] = bcrypt($validateData['password']);
        User::create($validateData);
        return redirect('/login')->with('sukses', 'Registrasi berhasil! silahkan login!');

    }
}
