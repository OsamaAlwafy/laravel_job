<?php

namespace App\Http\Controllers\userProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class qualification extends Controller
{
    //
    public function showqualification()
    {
        return view('userProfile.qualifications');   
    }
}
