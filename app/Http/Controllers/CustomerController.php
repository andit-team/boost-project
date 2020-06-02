<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use Session;
use Reminder;
use Mail;
use App\Events\CustomerRegistration;

class CustomerController extends Controller{
    public function dashboard(){
        return view('buyer-dashboard');
    }

    public function register(){
        return view('auth.customer.register');
    }

    public function registration(Request $request){
        $data = [
		    'first_name'=> $request->first_name,
		    'last_name' => $request->last_name,
		    'email' 	=> $request->email,
		    'password' 	=> $request->password,
		    'type' 	    => 'buyers',
		];
        $customer = Sentinel::registerAndActivate($data);
        // dd($customer);
        event(new CustomerRegistration($customer));
        // echo 'done';
        return redirect('dashboard');
    }

    public function userloginprocess(Request $request){
        $credentials = [
			'email'		=> $request->login['email'],
			'password'	=> $request->login['password'],
			'type'	    => 'buyers',
		];

		// if($request->remember == 'on')
		// 	$user = Sentinel::authenticateAndRemember($credentials);
		// else
			$user = Sentinel::authenticate($credentials);
        // dd($user);
		if($user)
			return redirect('dashboard');
		else
			return redirect('login')->with('error', 'Invalid email or password');
    }

    public function userlogin(){
        return view('auth.customer.login');
    }

// Forgot password......
    public function forgot(){
        return view('auth.customer.forgotpassword');
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
            // return view('auth.merchant.setnewpassword');
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
