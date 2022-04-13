<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\company;
use Illuminate\Support\Facades\DB;
use App\Models\job\job;
use App\Models\job\job_detail;
class admin extends Controller
{
    public function showadmin()
    {

        $company =DB::table('companies')
        ->select('*')
        ->get();
        //return response($company);
         return view('createjob')->with('company',$company);
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
        $j->type=$request->input('type_job');
        $j->save();
        $jd=new job_detail();
        $jd->Job_title=$request->input('name_job');
        $jd->salary=$request->input('salary_job');
        $jd->descripe=$request->input('desc_job');
        $jd->branch=$request->input('company_job');
        $jd->save();
        return view('createjob');
    }

    
    
}
