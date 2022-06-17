<?php

namespace App\Http\Controllers\userProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userData extends Controller
{
    //
    public function showData()
    {
        return view('userProfile.projectUser');
    }
    public function showCv()
    {
        return view("userProfile.profile_user");
    }

    public function showDataConnection()
    {
        return view('userProfile.projectUser');
    }
}
