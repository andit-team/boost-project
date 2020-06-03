<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
class ResetPasswordController extends Controller
{
    public function reset(Request $request){

        $email = User::whereEmail($request->email)->first();
        // Session::flush();need work here
        return view('auth.merchant.resetpassowrd',compact('email'));  
    }
   
     public function updatePassword(Request $request,$email){
         //dd($request->all());
        $request->validate([
            'password' => 'required|'
        ]);
       
        $user  = User::where('email',$email)->first();
        //dd($seller);
           
       $user->update([
            'password' => bcrypt($request->password),         
        ]);

        Session::flash('success', 'Password  Reset Successfully!');    
        // return redirect('merchant/login'.'?email='.$email);
        // Session::flush();     
        return redirect('merchant/login'); 
    }
}
