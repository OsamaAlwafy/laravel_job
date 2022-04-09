<?php

namespace App\Http\Controllers\userProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class experience extends Controller
{
    public function showExperience()
    {
        return view('userProfile.experience');   
    }
}
