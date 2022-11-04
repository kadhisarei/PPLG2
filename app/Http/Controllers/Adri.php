<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Adri extends Controller
{
    public function index(){
        return view('Adri.main');
    }
}
