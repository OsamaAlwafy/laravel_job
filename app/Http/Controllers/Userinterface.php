<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\company;
use App\Models\job;
use Illuminate\Http\Request;

class Userinterface extends Controller
{
    public function showIndex()
    {


        return view('index');
    }

    public function showProfile()
    {
        return view('userProfile.profile');
    }

    public function showJobs()
    {    
        $jobs=job::with("company.User","job_detail")->where("is_active",'=',1)->get();
        // return response()->json($companies);
        
       
        return view('jops')->with('jobs',$jobs);
    }

    public function showContact()
    {
        return view('contact');
    }

    public function showAbout()
    {
        return view('about');
    }

    public function showDetails($id)
    {  $job=job::with("company.User","job_detail")->where("id",'=',$id)->first();
        // return response()->json($job);
        return view('details')->with('job',$job);
      
        
    }
}
