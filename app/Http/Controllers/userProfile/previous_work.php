<?php

namespace App\Http\Controllers\userProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class previous_work extends Controller
{
    //

    public function showPreWork()
    {
        return view('userProfile.previous_works');   
    }
}
