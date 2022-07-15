<?php

namespace App\Http\Controllers\userProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\previous_work as modelPrevious_work;
use Illuminate\Support\Facades\DB;


class previous_work extends Controller
{
    //

   
    public function storePreWork(Request $request)
    {
      $PreWork=new modelPrevious_work();
      $PreWork->name=$request->name;
      $PreWork->project_url=$request->project_url;
      $PreWork->date=$request->date;
      $PreWork->describe=$request->describe;
      $PreWork->image=$request->image;
     


      $PreWork->user_id=Auth::id();
     // $PreWork->user_id=Auth::user()->id;
  
      $PreWork->save();
      return back();
    }
    public function showPreWork()
  { $id=Auth::id();
    $PreWorks=DB::table('previous_works')->where("user_id",$id)->get();
      return view('userProfile.projectUser')->with("previous_works",$PreWorks);      

  }
  public function editPreWork($id)
  {
    $PreWork=DB::table('previous_works')->where("id",$id)->first();
     return view("userProfile.editprojectUser")->with("previous_works",$PreWork);
  }
  public function deletePreWork($id)
  {
      DB::table('previous_works')->where("id",$id)->update(["is_active"=>0]);
      return back();

  }
 
  public function updatePreWork(Request $request,$id)
  {
      DB::table('previous_works')->where("id",$id)->update(["name"=>$request->name,"project_url"=>$request->project_url,
                                                              "date"=>$request->date,"describe"=>$request->describe,
                                                               "image"=> $request->image    ]);
      return  redirect('/pre_work');

  }
  
  public function activityPreWork($id,$active)
  {
      DB::table('previous_works')->where("id",$id)->update(["is_active"=>$active]);
      return back();
  }
}
