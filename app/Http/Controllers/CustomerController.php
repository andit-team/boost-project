<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
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
}
