<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth/login');
    }

    public function authenticate(request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ], [
            'email.required' => 'Field email wajib diisi',
            'password.required' => 'Field password wajib diisi'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return "berhasil";
            // return redirect()->intended('beranda'); // Ganti dengan rute peserta yang sesuai
        }

        return back()->withErrors([
            'email' => 'Email atau Password yang anda masukan salah',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('auth/login');
    }
}
