<?php

namespace App\Http\Controllers\fultter;

use App\Http\Controllers\Controller;
use App\Models\job;
use Illuminate\Http\Request;

class JobFultter extends Controller
{
    public function index()
    {   
        $request= request();
        // return $request->query('name');

        $jobs=job::with("company.User","job_detail")->where("is_active",'=',1);
        if($request->query('name'))
         {
            $jobs= $jobs->where("name","like","%".$request->query('name')."%");
         }
         if($request->query('city'))
         {
            $jobs= $jobs->where("User.city","like","%".$request->query('city')."%")->get();
         }
         
        
       
        
       
        return view('jops')->with('jobs',$jobs);
    }
}
