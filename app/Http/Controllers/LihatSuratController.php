<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sub_bidang;
use App\Models\surat;
use Illuminate\Support\Facades\Storage;
use App\Models\user_action;

class LihatSuratController extends Controller
{

    public function index(Request $request)
    {
        // Ambil data pengguna yang sedang login
        $user = auth()->user();
        $bidangId = $user->bidang_id;
        // dd($bidangId);

        // Ambil sub_bidang berdasarkan bidang jika menu disediakan
        $menu = $request->input('menu'); // Misalnya menu adalah parameter yang dikirim dalam permintaan
        $sub_bidang = $menu ? sub_bidang::where('bidang_id', $menu)->get() : [];
        $selectedMenuId = $request->input('selectedMenuId');


        // Inisialisasi query builder untuk surat
        $query = Surat::query();

        // Filter berdasarkan bidang_id melalui relasi sub_bidang
        if ($bidangId) {
            $query->whereHas('sub_bidang', function ($query) use ($bidangId) {
                $query->where('bidang_id', $bidangId);
            });
        }

        // Jika ada filter sub_bidang_id dari permintaan, tambahkan ke query
        $subBidangId = $request->input('sub_bidang_id');
        if ($subBidangId && is_numeric($subBidangId)) {
            $query->where('sub_bidang_id', (int) $subBidangId);
        }

        // Filter berdasarkan tanggal_surat jika disediakan
        if ($request->has('tanggal_surat') && $request->tanggal_surat) {
            $query->whereDate('tanggal_surat', $request->tanggal_surat);
        }

        // Ambil data dengan relasi
        $all_data = $query->with(['sub_bidang'])->get();
        // dd($all_data);

        // Kembalikan hasil pencarian ke view
        return view("dashboard/lihatsurat", compact('bidangId'), [
            'sub_bidang' => $sub_bidang,
            'selectedMenuId' => $selectedMenuId,
            'bidang' => $bidangId,
            'all_data' => $all_data,
        ]);
    }

    public function show(Request $request, $id)
    {
        $user = auth()->user();
        $bidangId = $user->bidang_id;
        // dd($bidangId);
        $selectedMenuId = $request->input('selectedMenuId');
        $data = surat::where('surat_id', $id)->get();
        // dd($data);
        return view("dashboard/detailsurat", [
            "data" => $data,
            "bidangId" => $bidangId,
            "selectedMenuId" => $selectedMenuId,
        ]);
    }

    public function destroy(Request $request, $surat_id)
    {
        $surat = surat::find($surat_id);

        if ($surat) {
            // Delete related user_action records
            user_action::where('surat_id', $surat_id)->delete();

            // Delete the file if it exists
            if ($surat->isi_surat && Storage::exists($surat->isi_surat)) {
                Storage::delete($surat->isi_surat);
            }

            // Delete the surat record
            $surat->delete();

            // Get the menuId from the request
            $menuId = $request->input('menuId');
            $selectedSubBidangName = $request->session()->get('selectedSubBidangName');
            $request->session()->put('selectedSubBidangName', $selectedSubBidangName);

            return redirect()->route('lihatSurat')->with('selectedMenuId', $menuId);
        }

        // Redirect back if surat not found
        return redirect()->route('lihatSurat')->with('selectedMenuId', $request->input('menuId'))->with('error', 'Surat not found.');
    }




    // public function findSurat(Request $request)
    // {
    //     // Initialize the query builder
    //     // Initialize the query builder
    //     $query = Surat::query();
    //     $data = auth()->user();
    //     $bidangId = $data->bidang_id;
    //     // dd($bidangId);

    //     // Get the selected menu ID and bidang ID from the request
    //     $selectedMenuId = $request->input('selectedMenuId');
    //     $selectedSubBidangId = $request->input('sub_bidang_id');
    //     // $selectedBidangId = $request->input('bidang_id'); // Assuming this is passed to identify the open bidang

    //     // Validate and cast the bidang_id to an integer if it's provided
    //     // if ($selectedBidangId && is_numeric($selectedBidangId)) {
    //     //     $bidang_id = (int) $selectedBidangId;
    //     //     $query->where('bidang_id', $bidang_id);
    //     // }

    //     // Get the selected sub_bidang name if sub_bidang_id is provided
    //     $selectedSubBidangName = null;
    //     if ($selectedSubBidangId && is_numeric($selectedSubBidangId)) {
    //         $subBidang = sub_bidang::find($selectedSubBidangId);
    //         $selectedSubBidangName = $subBidang ? $subBidang->nama_sub_bidang : null;
    //     }

    //     $request->session()->put('selectedSubBidangName', $selectedSubBidangName);

    //     // Filter by sub_bidang_id if provided
    //     if ($selectedSubBidangId && is_numeric($selectedSubBidangId)) {
    //         $query->where('sub_bidang_id', (int) $selectedSubBidangId);
    //     }

    //     // Apply filter for jenis_surat if provided
    //     if ($request->has('jenis_surat') && $request->jenis_surat) {
    //         $query->where('jenis_surat', $request->jenis_surat);
    //     }

    //     // Apply filter for tanggal_surat if provided
    //     if ($bidangId && $request->has('tanggal_surat') && $request->tanggal_surat) {
    //         $query->whereDate('tanggal_surat', $request->tanggal_surat);
    //     }

    //     // if ($bidangId && $request->has('tanggal_surat') && $request->tanggal_surat) {
    //     //     $query->whereDate('tanggal_surat', $request->tanggal_surat);
    //     // }

    //     // Execute the query and get the results
    //     $search_results = $query->get();

    //     // Return the results to a view or as JSON
    //     return view('dashboard/dataSurat', [
    //         'search_results' => $search_results,
    //         'selectedMenuId' => $selectedMenuId,
    //         'selectedSubBidangName' => $selectedSubBidangName
    //     ]);
    // }
}
