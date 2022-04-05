<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Userinterface extends Controller
{
    public function showIndex()
    {
        return view('index');
    }

    public function showProfile()
    {
        return view('profile');
    }

    public function showJobs()
    {
        return view('jops');
    }

    public function showContact()
    {
        return view('contact');
    }

    public function showAbout()
    {
        return view('about');
    }

    public function showDetails()
    {
        return view('details');
    }
}
