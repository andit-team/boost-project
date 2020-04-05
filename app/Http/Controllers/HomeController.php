<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Sentinel;
class phpHomeController extends Controller
{

    public function register(){
    	$data = [
		    'name'    	=> 'test',
		    'deki'    	=> 'dddd',
		    'email'    	=> 'sharif@me.com',
		    'password' 	=> 'password',
		];
		$user = Sentinel::registerAndActivate($data);
		dd($user);
	}

	public function login(){

		if (!Sentinel::check())
			dump('login page.. here');
		else
			return redirect('dashboard');
	}

	public function loginprocess(){
		$credentials = [
			'email'	=> 'sharif@me.com',
			'password'	=> 'password'
		];

		$user = Sentinel::authenticate($credentials);

		if($user)
			return redirect('dashboard');
		else
			return redirect('login');
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
