<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Models\Merchant;
use App\Models\Product;
use App\Models\Order;
use App\User;
class AdminHomeController extends Controller{

    public function dashboard(){
        if (Sentinel::check()){ 

            $last_10_order = Order::orderBy('id','desc')->take(10)->get(); 
            $last_10_invoice = Order::orderBy('invoice','desc')->take(10)->get();
            $last_10_customer = User::where('type','!=','admin')->orderBy('id','desc')->take(10)->get();
            return view('admin.dashboard',compact('last_10_order','last_10_invoice','last_10_customer'));
        }else{
            return redirect('boost/login')->with('error','Invalid email or password');
        }
			
    }
    
}
