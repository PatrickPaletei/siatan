<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\surat;
use App\Models\sub_bidang;
use App\Models\user_action;

class PelayananKesehatanController extends Controller
{
    protected $sub_bidang;

    public function __construct()
    {
        // Load sub_bidang data and store it in a class property
        $this->sub_bidang = sub_bidang::where('bidang_id', 4)->get();
    }
    public function index()
    {
        return view('dashboard/pelayananKesehatan', [
            'sub_bidang' => $this->sub_bidang
        ]);
    }

    public function store(Request $request)
    {
        // $sub_bidang = $this->sub_bidang;
        // dd($request->all());
        $request->validate([
            'sub_bidang_id' => 'required',
            'jenis_surat' => 'required',
            'judul_surat' => 'required',
            'tanggal_surat' => 'required',
        ], [
            'jenis_surat.required' => 'Field jenis surat wajib diisi',
            'judul_surat.required' => 'Field judul surat wajib diisi',
            'tanggal_surat.required' => 'Field tanggal surat wajib diisi',
        ]);

        // Initialize the Surat model
        $surat = new Surat;
        $surat->sub_bidang_id = $request->sub_bidang_id;
        $surat->jenis_surat = $request->jenis_surat;
        $surat->judul_surat = $request->judul_surat;
        $surat->tanggal_surat = $request->tanggal_surat;

        // Handle file upload
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->storeAs('files', $file->getClientOriginalName());

            // Set the 'isi_surat' field to the file path
            $surat->isi_surat = $path;
        }

        // Save the Surat record to the database (only once)
        $surat->save();

        $suratId = $surat->surat_id;
        $userId = auth()->user()->user_id;

        $user_action = new user_action;
        $user_action->surat_id = $suratId;
        $user_action->bidang_id = 4;
        $user_action->user_id = $userId;
        $user_action->save();


        return redirect('dashboard/pelayananKesehatan')->with('berhasil', 'Berhasil Menambahkan Surat!');
    }
}
