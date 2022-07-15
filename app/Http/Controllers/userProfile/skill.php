<?php

namespace App\Http\Controllers\userProfile;
use App\Models\skill as modelSkill;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class skill extends Controller
{
    //
    public function storeSkill(Request $request)
  {
    $skill=new modelSkill();
    $skill->name=$request->name;
    $skill->rate=$request->rate;
    $skill->user_id= Auth::id();

    $skill->save();
    return back();
  }
  public function showSkill()
  { 
    $id=Auth::id();
    $skills=DB::table('skills')->where("user_id",$id)->get();
      return view('userProfile.skillUser')->with("skills",$skills);      

  }
  public function editSkill($id)
  {
    $skill=DB::table('skills')->where("id",$id)->first();
     return view("userProfile.editSkill")->with("skill",$skill);
  }
  public function deleteSkill($id)
  {
      DB::table('skills')->where("id",$id)->update(["is_active"=>0]);
      return back();

  }

  public function updateSkill(Request $request,$id)
  {
      DB::table('skills')->where("id",$id)->update(["name"=>$request->name,"rate"=>$request->rate]);
      return  redirect('/skill');

  }
  
  public function activitySkill($id,$active)
  {
      DB::table('skills')->where("id",$id)->update(["is_active"=>$active]);
      return back();

  }
  
}
