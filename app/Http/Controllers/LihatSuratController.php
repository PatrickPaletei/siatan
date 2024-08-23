<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatSuratController extends Controller
{
    public function index()
    {
        return view('dashboard/lihatsurat');
    }
}
