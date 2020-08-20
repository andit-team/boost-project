<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Models\Merchant;
use App\Models\Product;
class AdminHomeController extends Controller{

    public function dashboard(){
        if (Sentinel::check()){ 
            
            return view('admin.dashboard');
        }else{
            return redirect('boost/login')->with('error','Invalid email or password');
        }
			
    }
    
}
