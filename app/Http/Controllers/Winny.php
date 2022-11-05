<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Winny extends Controller
{
    public function index(){
        return view('Winny.index');
    }
}
