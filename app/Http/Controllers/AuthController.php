<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Sentinel;
class AuthController extends Controller
{

    public function register(){
    	$data = [
		    'name'    	=> 'test',
		    'email'    	=> 'sharif@me.com',
		    'password' 	=> 'password',
		];
		$user = Sentinel::registerAndActivate($data);
		dd($user);
	}

	public function login(){

		if (!Sentinel::check())
			return view('auth.login');
		else
			return redirect('dashboard');
	}

	public function loginprocess(Request $request){
		// dd($request->all());
		$credentials = [
			'email'		=> $request->login['email'],
			'password'	=> $request->login['password']
		];

		if($request->remember == 'on')
			$user = Sentinel::authenticateAndRemember($credentials);
		else
			$user = Sentinel::authenticate($credentials);

		if($user)
			return redirect('dashboard');
		else
			return redirect('login')->with('error', 'Invalid email or password');
	}

	public function dashboard(){
		if (Sentinel::check())
			return view('welcome');
		else
			return redirect('login');
	}

	public function logout(){
		Sentinel::logout(null, true);
		return redirect('login');
	}
}
