<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'name' => 'required|min:3|max:255',
        'email' => 'required|unique:users',
        'password' => 'required|min:8|max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/login')->with('success', 'Registrasi Berhasil! Silahkan Login');
        }
}

