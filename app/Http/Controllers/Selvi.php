<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Selvi extends Controller
{
    public function index()
    {
        return view('Selvi.selvi');
    }
}
