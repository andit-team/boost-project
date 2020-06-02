<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use Session;
use Reminder;
use Mail;

class ForgotPassword extends Controller
{


    public function forgot(){
        return view('auth.merchant.forgotpassword');
    }

    public function password(Request $request){

    //   dd($request->all());

      $user = User::whereEmail($request->email)->first();

      if($user == null){

        return redirect()->back()->with(['error'=> 'Email not exists']);    
      }
       
      $user = Sentinel::findById($user->id);

      $reminder = Reminder::exists($user) ? : Reminder::create($user);

      $this->sendEmail( $user);

      return redirect()->back()->with(['success'=> 'Reset code sent to your emai']);   
       
       }

       public function sendEmail($user){
           Mail::send(
               'admin.emails.forgot',
               ['user' => $user],
               function($message) use ($user) {
                   $message->to($user->email);
                   $message->subject("$user->name,Reset Your password");
               }
            );
       }

       
}
