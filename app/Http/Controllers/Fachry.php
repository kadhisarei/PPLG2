<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fachry extends Controller
{
    public function lex()
    {
        return view('Fachry.index');
    }
}
