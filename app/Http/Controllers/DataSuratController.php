<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\surat;
use App\Models\user_action;

class DataSuratController extends Controller
{
    // public function index(Request $request)
    // {
    //     // $search_result = surat::all();
    //     // $permintaans = peserta_permintaan::with(['permintaan_pelatihan'])->where('id_user', auth()->user()->id)->get();
    //     $search_result = surat::with(['bidang', 'sub_bidang'])->where('sub_bidang_id')->get();
    //     return view("dashboard/dataSurat", [
    //         'selectedMenuId' => $request->session()->get('selectedMenuId'),
    //         'selectedSubBidangName' => $request->session()->get('selectedSubBidangName'),
    //         'search_results' => $search_result,
    //     ]);
    // }

    
}
