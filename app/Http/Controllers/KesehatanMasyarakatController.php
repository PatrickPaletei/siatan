<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KesehatanMasyarakatController extends Controller
{
    public function index()
    {
        return view('dashboard/kesehatanMasyarakat');
    }
}
