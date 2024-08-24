<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\surat;
class SekretariatController extends Controller
{
    public function index()
    {
        return view('dashboard/sekretariat');
    }

    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'judul_surat' => 'required|unique:surat',
            'tanggal_surat' => 'required',
            // 'isi_surat' => 'required|min:5' 
        ],[
            'judul_surat.required' => 'Field judul surat wajib diisi',
            'tanggal_surat.required' => 'Field tanggal surat wajib diisi',
            // 'password.required' => 'Field password wajib diisi'
        ]);

        $surat = new surat;
        $surat->judul_surat = $request->judul_surat;
        $surat->tanggal_surat = $request->tanggal_surat;
        $surat->save();
        // Handle file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->storeAs('files', $file->getClientOriginalName());
            
            // Assuming 'isi_surat' is a field in the 'surat' table, you should store the file path there.
            // Update the 'isi_surat' field in the 'surat' record
            $surat->isi_surat = $path;
            $surat->save();
        }
        return redirect('dashboard/sekretariat')->with('berhasil', 'Berhasil Menambahkan Surat!');

        // return 'Berhasil';
    }

}
