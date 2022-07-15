<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Mail\ActivateEmail;

use App\Models\User;
use App\Models\company;

class AuthController extends Controller
{


    public function checkRole(){
        if(Auth::user()->hasRole('admin'))
        return 'admin';
            else 
            return 'profile';
        
    }
    //
    public function showLogin()
    {
        return view('Authentication.login');
    }
    public function showRegister()
    {
        return view('Authentication.register');

    }

    public function dologin(Request $request) 
    {
        Validator::validate($request->all(),[
            'email'=>['email','required'],
            'password'=>['required']


        ],[
            'email.required'=>'this field is required',
           
           
        ]);
        

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
        {

            
            if(Auth::user()->hasRole('admin'))
              return redirect()->route('/admin');
            elseif(Auth::user()->hasRole('company'))
              return redirect()->route('dashboard_company');
            else
            return redirect()->route('dashboard_user');
        

     
        }
        else{
           return redirect()->back();
        } 
    }
 
    public function register(Request $request){

        Validator::validate($request->all(),[
            'name'=>['required','min:3','max:50'],
            'email'=>['required','email','unique:users,email'],
            'password'=>['required','min:5'],
            'comfirm_password'=>['same:password']


        ]);
     

        $u=new User();
        $u->name=$request->name;
        $u->password=Hash::make($request->password);
        $token=Str::uuid();
        $u->remember_token=$token;
        $u->email=$request->email;
        $email_date=["username"=>$request->name ,"activate_url"=>URL::to('/')."/verfiy_email/".$token];
        
       
        
            if($request->type==1)
            { $u->save();

                $u->attachRole('company');
                Auth::login($u);
                $company=new company();
                $company->user_id=$u->id;
                $company->save();
                Mail::to($request->email)->send(new ActivateEmail);
                return redirect()->route('dashboard_company');
            }
            elseif($request->type==0)
            {    $u->save();
                $u->attachRole('client');
                Auth::login($u);

                return redirect()->route('dashboard_user');
            }
            else
            {
                dd('else');
                return redirect()->back();
            }

            // $u->attachRole($request->role);
            // echo $request->role;
            // if($request->role=='admin')
            // return redirect()->route('admin');
            // return redirect()->route('profile');

            
           
           
       
      
       

    }
}
