<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Habibi extends Controller
{
    public function index()
    {
        return view('Habibi.habibi');
    }

}
