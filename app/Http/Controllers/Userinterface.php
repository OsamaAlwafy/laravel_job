<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Userinterface extends Controller
{
    public function showIndex()
    {
        return view('index');
    }
}
