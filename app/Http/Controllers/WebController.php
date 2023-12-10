<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function landing() {
        return view('landing');
    }

    public function menu() {
        return view('menu');
    }
}