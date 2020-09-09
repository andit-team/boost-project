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
       
      // Session::forget('merchant/reset_password/');
      // Session::flush();
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
      // Session::flush();
      return redirect()->back()->with(['success'=> 'Reset link sent to your emai']);   
       
       }

       public function sendEmail($user){
           Mail::send(
               'admin.mail.forgot',
               ['user' => $user],
               function($message) use ($user) {
                   $message->to($user->email);
                   $message->subject("$user->first_name,Reset Your password");
               }
            );
       }

}
