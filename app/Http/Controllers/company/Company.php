<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use App\Http\Controllers\job\job as JobJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\company as modelCompany;
use App\Models\job_detail;
use Illuminate\Support\Facades\Auth;
use App\Models\service;

use App\Models\job;
use App\Models\Tag;
use App\Models\User;
use App\Notifications\AccesptUser;

class Company extends Controller
{
    //
    public function showProfileCompany()
    {
        return view("company.profile.index");
    }
    public function indexDashboard()
    {
        //  $companies=DB::table('companies')->first();
        $id=Auth::id();
        $comapnyData=DB::table('users')->where("id",$id)->first(); 
         
          return view("company.aboutCompany")->with('companyData',$comapnyData);
    }
    // public function updateCompanyData($id,Request $request)
    // {
    //     DB::table('users')->where("id",$id)->update(['name'=>$request->name,'describe'=>$request->describe,
    //                                 "city"=>$request->city ,"country"=>$request->country ]);
    // }
    public function securityCompany()
    { 
        return view("company.securityCompany");
    }
    public function connectionCompany()
    {
        return view("company.connectionCompany");
    }
    public function serviceCompany()
    {  $id=Auth::id();
        $services=DB::table('services')->where("user_id",$id)->get(); 
        return view("company.serviceCompany")->with("services",$services);
    }
    public function storeService(Request $request)
    {   $id=Auth::id();
        $service=new service();
        $service->name=$request->name;
        $service->description=$request->describe;
        $service->user_id=$id;
        $service->save();
    }
    public function activityService($id,$active)
    {   DB::table('services')->where("id",$id)->update(["is_active"=>$active]);
        return back();
       
    }
    public function editService($id)
    {
        $service=DB::table('services')->where("id",$id)->first(); 
        
        return view("company.editserviceCompany")->with("service",$service);
    }
    public function updateService(Request $request ,$id)
    {    DB::table('services')->where("id",$id)->update(["name"=>$request->name,"description"=>$request->description]);
         return redirect('service_company');
        //return view("company.serviceCompany");
    }
    public function updateCompanyData(Request $request)
    { 
        $id=Auth::id();
        DB::table('users')->where("id",$id)->update(['name'=>$request->name,'describe'=>$request->describe,
                                    "city"=>$request->city ,"country"=>$request->country ]);
        return back();
                                                                                          
    }

    

    public function showJob()
    {
     $id=Auth::id();
     
     $jobs = modelCompany::with("jobs.user","jobs.job_detail")->where("user_id",$id)->first();
     $tags=Tag::get();
    
    //  return response()->json($jobs);
     
    //    $jobs =DB::table('jobs')->join("job_details","job_details.job_id","=","jobs.id")
    //                        ->join("companies","companies.id","=","jobs.company_id")
    //                        ->join("applicants","applicants.job_id","=","jobs.id")
    //                        ->join("users","users.id","=","applicants.user_id")
    //                        ->where("companies.id","=",3)
    //                        ->select("users.name as username","companies.*","job_details.*","jobs.*")
    //                        ->get();
                         //return $jobs->jobs[0]->job_detail;
                      // return response()->json($jobs);
                    //   return $jobs;
                      
                         
        return view("company.jobCompany")->with(["jobs"=>$jobs,"tags"=>$tags]);
    }

    public function editJob($id)
    {
        $job=DB::table('jobs')->where("jobs.id",$id)->join("job_details","job_details.job_id","=","jobs.id")->first();
     return view("company.createUpdateCompany")->with("job",$job);

    }
    public function deleteJob($id)
    {
        DB::table('jobs')->where("id",$id)->update(["is_active"=>0]);
      return back();
    }
    public function activityJob($id,$active)
    {
        DB::table('jobs')->where("id",$id)->update(["is_active"=>$active]);
        return back();

    }
    public function createJob()
    {
    return view("company.createUpdateCompany");
    }
    public function storeJob(Request $request)
    { $company_id=Auth::id();
        
        $id=DB::table('jobs')->insertGetId(["name"=>"asdsad","company_id"=>$company_id,"tag_id"=>$request->tag] );
        DB::table('job_details')->insert(["Job_title"=>$request->Job_title,"salary"=>$request->salary,
                                                                 "branch"=>$request->branch,"time_type"=>$request->time_type,
                                                                 "skill"=>$request->skill,"duration_experience"=>$request->duration_experience,
                                                                 "descripe"=>$request->descripe,"W_responsible"=>$request->W_responsible,
                                                                 "why_w_us"=>$request->why_w_us,"job_id"=>$id  ]);
      return  redirect('/show_job_company');

    }
    public function updateJob(Request $request,$id)
    {
        DB::table('jobs')->where("id",$id)->update(["name"=>$request->name]);
        DB::table('job_details')->where("job_id",$id)->update(["Job_title"=>$request->Job_title,"salary"=>$request->salary,
                                                                 "branch"=>$request->branch,"time_type"=>$request->time_type,
                                                                 "skill"=>$request->skill,"duration_experience"=>$request->duration_experience,
                                                                 "descripe"=>$request->descripe,"W_responsible"=>$request->W_responsible,
                                                                 "why_w_us"=>$request->why_w_us  ]);
      return  redirect('/show_job_company');

    }
    public function acceptUser($job_id,$user_id)
    {

         $company=Auth::user();
         $user=User::where("id",$user_id)->first(); 
         $job=Job::where("id",$job_id)->first(); 
         //DB::table('jobs')->where("id",$job_id)->update(["user_accept"=>$user_id,"is_complete"=>1,"is_active"=>0]);
         $user->notify( new AccesptUser($company,$job));
    }
}
