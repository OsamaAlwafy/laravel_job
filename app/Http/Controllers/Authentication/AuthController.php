<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{


    public function checkRole(){
        if(Auth::user()->hasRole('admin'))
        return 'admin';
            else 
            return 'profile';
        
    }
    //
    public function login()
    {
        return view('Authentication.login');
    }
    public function signup()
    {
        return view('Authentication.signup');

    }

    public function dologin(Request $request)
    {
        Validator::validate($request->all(),[
            'email_username'=>['email','required','min:3','max:50'],
            'user_pass'=>['required','min:5']


        ],[
            'email_username.required'=>'this field is required',
            'email_username.min'=>'can not be less than 3 letters', 
           
        ]);

        if(Auth::attempt(['email'=>$request->email_username,'password'=>$request->user_pass]))
        {

            
            if(Auth::user()->hasRole('admin'))
            return redirect()->route('admin');
            else 
            return redirect()->route('profile');
        // $u=new User();
        // $u->name=$request->input('email_username');
        // $u->save();

        // return view('Authentication.login');
        }
    }
 
    public function register(Request $request){

        Validator::validate($request->all(),[
            'full_name'=>['required','min:3','max:50'],
            'u_email'=>['required','email','unique:users,email'],
            'user_pass'=>['required','min:5'],
            'confirm_pass'=>['same:user_pass']


        ],[
            'full_name.required'=>'this field is required',
            'full_name.min'=>'can not be less than 3 letters', 
            'u_email.unique'=>'there is an email in the table',
            'u_email.required'=>'this field is required',
            'u_email.email'=>'incorrect email format',
            'user_pass.required'=>'password is required',
            'user_pass.min'=>'password should not be less than 3 requister',
            'confirm_pass.same'=>'password dont match',


        ]);

        $u=new User();
        $u->name=$request->full_name;
        $u->password=Hash::make($request->user_pass);
        $u->email=$request->u_email;
        echo $u->save();
       
        if($u->save()){
            $u->attachRole($request->role);

            
           
            return redirect()->route($this->checkRole())
            ->with(['success'=>'user created successful']);
        }

      
        return back()->with(['error'=>'can not create user']);

    }
}
