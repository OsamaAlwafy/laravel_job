<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\company as modelCompany;
use App\Models\job_detail;
use App\Models\job;


class Company extends Controller
{
    //
    public function indexDashboard()
    {
        //  $companies=DB::table('companies')->first();
         
          return view("company.aboutCompany");
    }
    public function securityCompany()
    {
        return view("company.securityCompany");
    }
    public function connectionCompany()
    {
        return view("company.connectionCompany");
    }

    public function showJob()
    {

     $jobs = modelCompany::with("jobs.user","jobs.job_detail")->where("id",1)->first();
    //    $jobs =DB::table('jobs')->join("job_details","job_details.job_id","=","jobs.id")
    //                        ->join("companies","companies.id","=","jobs.company_id")
    //                        ->join("applicants","applicants.job_id","=","jobs.id")
    //                        ->join("users","users.id","=","applicants.user_id")
    //                        ->where("companies.id","=",3)
    //                        ->select("users.name as username","companies.*","job_details.*","jobs.*")
    //                        ->get();
                         //return $jobs->jobs[0]->job_detail;
                      // return response()->json($jobs);
                         
        return view("company.jobCompany")->with("jobs",$jobs);
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
    {
        $id=DB::table('jobs')->insertGetId(["name"=>$request->name,"company_id"=>$request->company_id]);
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
}
