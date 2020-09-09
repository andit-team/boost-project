<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Reminder;
class ResetPasswordController extends Controller
{
    public function reset(Request $request){

        $email = User::whereEmail($request->email)->first();
        // Session::flush();need work here
        if(Reminder::exists($email,$request->token)){
            return view('auth.merchant.resetpassowrd',compact('email'));  
        }
        return redirect()->back();
    }
   
     public function updatePassword(Request $request,$email){
         //dd($request->all());
        $request->validate([
            'password'      => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6',
        ]);
       
        $user  = User::where('email',$email)->first();
        //dd($seller);
        $reminder = \DB::table('reminders')->where('user_id',$user->id)->first();
           
        if(Reminder::exists($user,$reminder->code)){
            $user->update([
                'password' => bcrypt($request->password),         
            ]);
            \DB::table('reminders')->where('user_id',$user->id)->delete();
            Session::flash('success', 'Password Reset Successfully!');  
            return redirect('login'); 
        }
        return redirect()->back();
       
    }
}
