<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class P2pController extends Controller
{
    public function index()
    {
        return view('dashboard/p2p');
    }
}
