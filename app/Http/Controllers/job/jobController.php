<?php

namespace App\Http\Controllers\job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\job\job;
use Illuminate\Support\Facades\DB;
//use App\Models\job\job_detail;

class jobController extends Controller
{
  
  public function addJob()
  {
    
  }
  public function listJob()
  {
    $categories=DB::table('jobs')
    ->join('job_details', 'job_details.id', '=', 'jobs.id')
    ->join('companies', 'companies.id', '=', 'jobs.id')
    ->select('jobs.*', 'companies.name','companies.logo','companies.city', 'companies.city','companies.location','job_details.salary')
    ->get();
    return view('job.listJob')
    ->with('categories',$categories);  
   // return response($jobs);
      
  }

  public function storeJob(Request $request )
  {
    Validator::validate($request->all(),[
        'name_job'=>['required','min:3','max:40'],
        'type_job'=>['required','min:4'],
        'company_job'=>['required'],
        'salary_job'=>['required','min:2'],
        'desc_job'=>['required','min:10']


    ],[
        'name_job.required'=>'this field is required',
        'name_job.min'=>'can not be less than 3 letters', 
        'name_job.unique'=>'there is an email in the table',
    ]);

    
    $jd=new job_detail();
    $jd->Job_title=$request->input('name_job');
    $jd->salary=$request->input('salary_job');
    $jd->descripe=$request->input('desc_job');
    $jd->branch=$request->input('company_job');

    $jd->why_w_us='why_w_us';
    $jd->W_responsible='W_responsible';

    $id_details=$jd->save();

    $j=new job();
    $j->name=$request->input('name_job');
    $j->type=$request->input('type_job');
    $j->company_id=3;
    $j->job_details_id=$id_details;

    
    if($j->save())
        return redirect()->route('admin')->with(['success'=>'data inserted successful']);
        return redirect()->back()->with(['error'=>'can not add data ']);
  }
  public function editJob($job_id)
  {  $category=DB::table('jobs')
    ->join('job_details', 'job_details.id', '=', 'jobs.id')
    ->join('companies', 'companies.id', '=', 'jobs.id')
    ->select('jobs.*', 'companies.name as name_ca', 'companies.id','job_details.salary','job_details.descripe','job_details.W_responsible','why_w_us','branch' )
    ->where('jobs.id',$job_id)
    ->get()->first();
    //return response($category);
       return view('job.editJob')->with('category',$category);
  }
  public function updateJob()
  {
      
  }
  public function toggleJob()
  {
      
  }


}
