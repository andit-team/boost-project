<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Models\Seller;
class MerchantController extends Controller{

    public function dashboard(){
        $sellerProfile = Seller::where('user_id',Sentinel::getUser()->id)->first();
       return view('vendor-deshboard',compact('sellerProfile'));
    }

    public function merchantlogin(){
        return view('auth.merchant.login');
    }
    public function merchantloginprocess(Request $request){
        $credentials = [
            'email'		=> $request->login['email'],
            'password'	=> $request->login['password'],
            'type'	    => 'sellers',
        ];

        // if($request->remember == 'on')
        // 	$user = Sentinel::authenticateAndRemember($credentials);
        // else
        $user = Sentinel::authenticate($credentials);
        // dd($user);
        if($user)
            //return redirect('dashboard');
            // here is redirecing verdor dashboard
            //die('vendoer Dashboard');
            return view('vendor-deshboard');
        else
            //die('somer error here...');
            return redirect('login')->with('error', 'Invalid email or password');
    }

    public function sellOnAndbaazar(){
        return view('merchant.sell-on-andbaazar');
    }

    public function sellOnAndbaazarPost(Request $request){
        dd($request->all());
    }

    public function registrationStepOne(){
        return view('auth.merchant.registration');
    }
    public function registrationStepOneProcess(){
    }
    public function registrationStepTwo(){
        return view();
    }
    public function registrationStepTwoProcess(){
    }
    public function registrationStepFinal(){
        return view();
    }
    public function registrationStepFinalProcess(){
    }


}
