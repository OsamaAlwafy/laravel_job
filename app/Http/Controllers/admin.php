<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function showadmin()
    {
        return view('createjob');
    }

    
    public function createCompany(){
        return view('createCampany');

    }
}
