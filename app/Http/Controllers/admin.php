<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\job;
use App\UploudImage\SystemUtils;
use App\Models\Company;
use App\Models\job_detail;
class admin extends Controller
{
    public function showadmin()
    {  $companies=DB::table('companies')->get();
        return view('createjob')->with("companies",$companies);
    }

    public function  creat_admin()
    {
        return view('admin.create_admin');

    }

    public function addJob(Request $request){
        Validator::validate($request->all(),[
            'name_job'=>['required','min:3','max:40'],
            'type_job'=>['required','min:4'],
            'company_job'=>['required'],
            'salary_job'=>['required','min:10'],
            'desc_job'=>['required','min:15']


        ],[
            'name_job.required'=>'this field is required',
            'name_job.min'=>'can not be less than 3 letters', 
            'name_job.unique'=>'there is an email in the table',
        ]);

        $j=new job();
        $j->name=$request->input('name_job');
        $j->company_id =$request->input('company_job');
        
        $j->save();
        $jd=new job_detail();
        
        $jd->Job_title=$request->input('type_job');
        // $jd->branch=$request->input('branch');
        $jd->branch="Aden";
        $jd->salary=$request->input('salary_job');
        $jd->descripe=$request->input('desc_job');
        $jd->why_w_us=$request->input('why_w_us');
        $jd->W_responsible=$request->input('W_responsible');
        // $jd->company_id=
      
        $jd->job_id=$j->id;
        $jd->save();
        return back();
    }
  
    public function ShowJob()
    {   $jobs=DB::table('job_details')->join('jobs', 'job_details.job_id', '=', 'jobs.id')
                                       ->join('companies','jobs.company_id','=','companies.id')
                                       ->select("jobs.id as jobId ","jobs.is_complete","jobs.company_id" ,"jobs.name","job_details.*","companies.*") 
                                       ->get();
                                       
                                      
        return view("admin.showJobs")->with("jobs",$jobs);
    }


    public function showUpdateJob($id)
    {
        $job=DB::table('Jobs')->join("job_details","job_details.job_id","=","jobs.id")
                                ->select("jobs.id as jobId ","jobs.company_id" ,"jobs.name","job_details.*")
                                ->where("jobs.id",$id)->first();

                           
        $companies=DB::table('companies')->get();
        return view("admin.Updatejob")->with(["job"=>$job,"companies"=>$companies]);
    }
 
    public function UpdateJob(Request $request ,$id)
    {

        DB::table('jobs')->where("id","=",$id)->update(["name"=>$request->name_job,"company_id"=>$request->company_job]);

        DB::table('job_details')->where("job_id","=",$id)->update(["branch"=>$request->branch,"salary"=>$request->salary_job,
                                                                  "descripe"=>$request->desc_job,"why_w_us"=>$request->why_w_us,
                                                                  "W_responsible"=>$request->W_responsible,
                                                                 
        
                                                                  ]);
    //   $job=Job::find($id);
    //   $job->name=$request->input('name_job');
    //   $job->company_id =$request->input('company_job');
      
    //   $job->save();
    //   $jd=job::where("job_id","=",$id)->first();
      
    //   $jd->Job_title=$request->input('type_job');
    //   // $jd->branch=$request->input('branch');
    //   $jd->branch="Aden";
    //   $jd->salary=$request->input('salary_job');
    //   $jd->descripe=$request->input('desc_job');
    //   $jd->why_w_us=$request->input('why_w_us');
    //   $jd->W_responsible=$request->input('W_responsible');
    //   // $jd->company_id=
    
     
    //   $jd->save();
      return back();

     
 
    }
    public function deleteJob($id)
    {
        DB::table('jobs')->where("id","=",$id)->update(["is_active"=>0]);
        return back();
    }
 
    
    public function createCompany(){
        return view('createCampany');

    }
    public function storeCompany(Request $request)
    {
       $company=new Company();
       $company->name_com=$request->name;
       $company->location=$request->location;
       $company->city=$request->city;
       $company->type=$request->type;
       $company->url=$request->url;
       $company->logo=SystemUtils::logo($request,"company/logo");
       $company->save();
    }

    public function deleteCompany($id)
    {
        
        DB::table('companies')->where("id","=",$id)->update(["is_active"=>0]);
        return back();
    }
    public function activityJob($id,$active)
    {
        // dd($id." ".$active);
     $companies = DB::table('jobs')->where("id","=",$id)->update(["is_active"=>$active]);
     return back();
 
    }
    public function showCompany()
    {
     $companies = DB::table('companies')->get();
        return view("admin.showCampany")->with("companies",$companies);
    }
   public function activityCompany($id,$active)
   {
    $companies = DB::table('companies')->where("id","=",$id)->update(["is_active"=>$active]);
    return back();

   }
  
   public function showUpdateCompany($id)
   {
       $company=DB::table('companies')->where("id",$id)->first();
       return view("admin.updateCampany")->with("company",$company);
   }

   public function UpdateCompany(Request $request ,$id)
   {
    DB::table('companies')->where("id","=",$id)->update(["name_com"=>$request->name,"city"=>$request->city,
                                                        "location"=>$request->location,"url"=>$request->url,
                                                         "type"=>$request->type
                                          
                                                        ]);
    return back();

   }

    
}
