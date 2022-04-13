<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\company;

class companyController extends Controller
{
    //

    public function createCompany(){
        return view('company.createCampany');

    }

    public function storeCompany(Request $request)
    {

        Validator::validate($request->all(),[
            'name'=>['required','min:5','max:20'],
            'location'=>['required','min:5','max:50']


        ],[
            'name.required'=>'this field is required',
            'name.min'=>'can not be less than 5 letters', 
            'name.max'=>'can not be greater than 20 letters', 
            'location.required'=>'this field is required',
            'location.min'=>'can not be less than 5 letters', 
            'location.max'=>'can not be greater than 20 letters',

           
        ]);

        $new_cat=new company();
        $new_cat->name=$request->name;
        $new_cat->location=$request->location;
        $new_cat->type=$request->type;
        $new_cat->city=$request->city;
        // $new_cat->is_active=$request->is_active;
        $new_cat->logo=$request->hasFile('img')?$this->uploadFile($request->file('img')):"default_category.png";
        if($new_cat->save())
        return redirect()->route('creat_company')->with(['success'=>'data inserted successful']);
        return redirect()->back()->with(['error'=>'can not add data ']);

    }

    public function uploadFile($file){
        $dest=public_path()."/images/";

        //$file = $request->file('image');
        $filename= time()."_".$file->getClientOriginalName();
        $file->move($dest,$filename);
        return $filename;


    }

    public function listCompany()
    {
        $categories=company::orderBy('id','desc')->get();
        return view('company.listCompany')
        ->with('categories',$categories);
    }

    public function editCompany($com_id){
        $category=company::find($com_id);
        return view('company.editCompany')
        ->with('category',$category);

    }
    public function updateCompany(Request $request , $com_id)
    {
        $cat=company::find($com_id);
        $cat->name=$request->name;
        $cat->location=$request->location;
        $cat->type=$request->type;
        $cat->city=$request->city;
        if($request->hasFile('image'))
        $cat->image=$this->uploadFile($request->file('image'));
        if($cat->save())
        return redirect()->route('list_company')->with(['success'=>'data updated successful']);
        return redirect()->back()->with(['error'=>'can not update data ']);

    }
}
