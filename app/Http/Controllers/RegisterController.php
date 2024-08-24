<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\bidang;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $bidang = bidang::all();
        return view('auth/register',[
            'bidang'=>$bidang
        ]
    );
    }

    public function store(Request $request)
    {
        // dd($request->all());
         $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:user',
            'password' => 'required|min:5',
            'bidang_id' => 'required' 
        ],[
            'name.required' => 'Field nama wajib diisi',
            'email.required' => 'Field email wajib diisi',
            'password.required' => 'Field password wajib diisi'
        ]);
 


        $user = new user;
        $user->nama_lengkap = $request->name;
        $user->email = $request->email;
        $user->bidang_id = $request->bidang_id;
        $user->role = 'user';
        $user->password = Hash::make($request->password);
        $user->save();
        

        return redirect('auth/login')->with('berhasil', 'Registrasi berhasil! Silahkan login');
    }
}
