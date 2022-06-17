<?php

namespace App\Http\Controllers\userProfile;

use App\Http\Controllers\Controller;
use App\Models\qualification as modelQualification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class qualification extends Controller
{
    //
    public function showqualification()
    {
      $qualification=DB::table('qualifications')->get();
        return view('userProfile.qualificationsUser')->with("qualifications",$qualification);   
    }
    public function storeQualification(Request $request)
    {
      $qualification=new modelQualification();
      $qualification->name=$request->name;
      $qualification->date=$request->date;
      $qualification->describe=$request->describe;

      $qualification->user_id=1;
     // $qualification->user_id=Auth::user()->id;
  
      $qualification->save();
      return back();
    }

    public function editqualification($id)
  {
    $qualification=DB::table('qualifications')->where("id",$id)->first();
     return view("userProfile.editqualificationsUser")->with("qualification",$qualification);
  }
  public function deletequalification($id)
  {
      DB::table('qualifications')->where("id",$id)->update(["is_active"=>0]);
      return back();

  }

  public function updatequalification(Request $request,$id)
  {
      DB::table('qualifications')->where("id",$id)->update(["name"=>$request->name,"date"=>$request->date,
                                                     
                                                             "describe"=>$request->describe]);
      return  redirect('/qualifications');

  }
  
  public function activityqualification($id,$active)
  {
      DB::table('qualifications')->where("id",$id)->update(["is_active"=>$active]);
      return back();

  }
  
}
