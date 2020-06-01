<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ResetPasswordController extends Controller
{
    public function reset(Request $request){
        
        $email = User::whereEmail($request->email)->first();

        return view('auth.merchant.resetpassowrd');
    }
   

        public function updatePassword($email)
        {
           dd($request->all());
        //     $curr_password = $request->curr_password;
        //     $new_password  = $request->new_password;
        
        
        // if(!Hash::check($curr_password,Auth::user()->password)){
        // echo 'The specified password does not match';
        // }
        // else{
        //     $request->user()->fill(['password' => Hash::make($new_password)])->save();
        //     echo 'Updated Successfully';
        
        //  }
     }
}
