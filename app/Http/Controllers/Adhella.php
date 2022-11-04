<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adhella extends Controller
{
    public function index(){
        return view('Adhella.adhella');
    }
}
