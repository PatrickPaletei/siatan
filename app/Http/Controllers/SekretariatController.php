<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekretariatController extends Controller
{
    public function index()
    {
        return view('dashboard/sekretariat');
    }
}
