<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Siti extends Controller
{
    public function index()
    {
        return view ('Siti.siti');
    }
}
