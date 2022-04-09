<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('Authentication.login');
    }
    public function signup()
    {
        return view('Authentication.signup');

    }

    public function dologin($request){
        Validator::validate($request->all(),[
            'email_username'=>['email','required','min:3','max:10'],
            'user_pass'=>['required','min:5']


        ],[
            'email_username.required'=>'this field is required',
            'email_username.min'=>'can not be less than 3 letters', 
            'email_username.unique'=>'there is an email in the table',
        ]);

        $u=new User();
        $u->name=$request->input('email_username');
        $u->save();

        return view('Authentication.login');
    }
    public function dosignup($request){
        Validator::validate($request->all(),[
            'email_username'=>['email','required','min:3','max:10','unique:users'],
            'user_pass'=>['required','min:5']


        ],[
            'email_username.required'=>'this field is required',
            'email_username.min'=>'can not be less than 3 letters', 
            'email_username.unique'=>'there is an email in the table',
        ]);

        $u=new User();
        $u->name=$request->input('email_username');
        $u->save();

        return view('Authentication.signup');

    }
}
