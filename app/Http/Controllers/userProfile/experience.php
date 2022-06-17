<?php

namespace App\Http\Controllers\userProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\experience as modelExperience;
use Illuminate\Support\Facades\DB;


class experience extends Controller
{
    
    public function storeExperience(Request $request)
    {
      $qualification=new modelExperience();
      $qualification->name=$request->name;
      $qualification->start_date=$request->start_date;
      $qualification->end_date=$request->end_date;
      $qualification->describe=$request->describe;
      $qualification->campany_name=$request->campany_name;
      $qualification->campany_url=$request->campany_url;


      $qualification->user_id=1;
     // $Experience->user_id=Auth::user()->id;
  
      $qualification->save();
      return back();
    }

    public function showExperience()
  {
    $experiences=DB::table('experiences')->get();
      return view('userProfile.experienceUser')->with("experiences",$experiences);      
  }
  public function editExperience($id)
  {
    $experiences=DB::table('experiences')->where("id",$id)->first();
     return view("userProfile.editExperienceUser")->with("experience",$experiences);
  }
  public function deleteExperience($id)
  {
      DB::table('experiences')->where("id",$id)->update(["is_active"=>0]);
      return back();

  }

  public function updateExperience(Request $request,$id)
  {
      DB::table('experiences')->where("id",$id)->update(["name"=>$request->name,"end_date"=>$request->end_date,
                                                          "describe"=>$request->describe,"campany_name"=>$request->campany_name,
                                                          "campany_url"=>$request->campany_url]);
      return  redirect('/experience');

  }
  
  public function activityExperience($id,$active)
  {
      DB::table('experiences')->where("id",$id)->update(["is_active"=>$active]);
      return back();

  }
}
