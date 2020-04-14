<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class CustomerController extends Controller{
    public function dashboard(){

    }

    public function register(){
        return view('auth.customer.register');
    }

    public function registration(Request $request){
        dd($request->all());
        $data = [
		    'first_name'=> $request->first_name,
		    'last_name' => $request->last_name,
		    'email' 	=> $request->email,
		    'password' 	=> $request->password,
		    'type' 	    => 'buyers',
		];
        $user = Sentinel::registerAndActivate($data);
        
        return redirect();
    }

    public function userloginprocess(){

    }

    public function userlogin(){
        return view('auth.customer.login');
    }
}
