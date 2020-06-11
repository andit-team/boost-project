<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
class AdminHomeController extends Controller{

    public function dashboard(){
        if (Sentinel::check())
			return view('admin.dashboard');
		else
			return redirect('andbaazar/login')->with('error','Invalid email or password');
    }
    
}
