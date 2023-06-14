<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password'=>['required',]
        ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        if (auth()->user()->role === 'manajer') {
            return redirect()->intended('/');
        } elseif (auth()->user()->role === 'kasir') {
            return redirect()->intended('/');
        } else {
            return redirect()->intended('/dashboard');
        }
    }
        
        return back()->with('loginError','Email atau password yang dimasukkan salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login')->with('logout', 'Akun telah berhasil keluar');
    }

}