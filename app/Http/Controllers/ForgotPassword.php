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

      Reminder::exists($user) ? : Reminder::create($user);
      $reminder = \DB::table('reminders')->where('user_id',$user->id)->first();
      $this->sendEmail($user,$reminder->code);
      // Session::flush();
      return redirect()->back()->with(['success'=> 'Reset link sent to your email']);   
       
       }

       public function sendEmail($user,$reminder){
           Mail::send(
               'admin.mail.forgot',
               ['user' => $user,'reminder'=>$reminder],
               function($message) use ($user) {
                   $message->to($user->email);
                   $message->subject("$user->first_name,Reset Your password");
               }
            );
       }

}
