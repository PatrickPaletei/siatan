<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index()
    {
        $data = auth()->user();
        $bidangId = $data->bidang_id;
        return view('dashboard/bidang',compact('bidangId'));
    }
}
