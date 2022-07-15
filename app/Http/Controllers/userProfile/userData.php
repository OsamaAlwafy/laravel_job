<?php

namespace App\Http\Controllers\userProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\user;
use App\models\connectionInfo;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class userData extends Controller
{
    //

    public function showData()
    {  $id=Auth::id();
        $userDate=DB::table('users')->where("id",$id)->first(); 
        $location = file_get_contents('http://api.ipstack.com/205.2.110.44?access_key=ede7b4eeb26fe129a2c6f16d18d2c79c');
        //return $location;
        return view("userProfile.aboutUser")->with("userData",$userDate);
    }
    public function updateUserData(Request $request,$idx)
    { 
        $id=Auth::id();
        DB::table('users')->where("id",$id)->update(['name'=>$request->name,'describe'=>$request->describe,
                                    "city"=>$request->city ,"country"=>$request->country ]);
                                                                                          
    }
    public function showCv($id)
    {  
        $userData=User::with('skill','qualification','previous_work','experience')->where("id",$id)->first();
        // return $userData;
       
        return view("userProfile.profile_user")->with("userData",$userData);
    }

    public function showDataConnection()
    {   
        $id=Auth::id();
        $connectionData=DB::table('connection_infos')->where("user_id",$id)->get()->toArray();
       // return $connectionData;
      
    
        
      
        return view("userProfile.connectionUser")->with("connectionData",$connectionData);
    }
    public function editDataConnection()
    {
        $id=Auth::id();
        $connectionData=DB::table('connection_infos')->where("user_id",$id)->get()->toArray();
        return view("userProfile.connectionUser")->with("connectionData",$connectionData);

    }
    public function storeDataConnection(Request $request)
    {  
        $id=Auth::id();
        $is_active=0;
        if($request->is_active=="on")
          $is_active=1;
      
        DB::table('connection_infos')->upsert([
            ['name' => $request->name, 'url' =>$request->url ,'is_active'=>$is_active, 'user_id' =>$id]]
            ,['url'],['url','is_active','name']);
            
            
    }
    public function showJobApplied()
    {    $id = Auth::id();
        $jobs = user::with("job.job_detail","job.company.User")->where("id",$id)->get();
    //    return  response()->json($jobs[0]->job);
        // return $jobs;
        return view("userProfile.showJobApplicateUser")->with("jobs",$jobs);
    }

    public function applyingJob($id)
    { $user_id=Auth::id();
        DB::table('job_user')->insert(["user_id"=>$user_id,"job_id"=>$id]);
    }
}
