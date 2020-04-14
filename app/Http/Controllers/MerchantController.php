<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
class MerchantController extends Controller{

    public function dashboard(){
        
    }

    public function registrationStepOne(){
        return view('auth.merchant.login');
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
