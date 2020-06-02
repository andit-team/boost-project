<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
class ResetPasswordController extends Controller
{
    public function reset(Request $request){

        $email = User::whereEmail($request->email)->first();
        // $user = User::all();
        return view('auth.merchant.resetpassowrd',compact('email'));
    }
   

    //      public function updatePassword($email)
    //     {
    //        dd($request->all());
    //         $curr_password = $request->curr_password;
    //         $new_password  = $request->new_password;
        
        
    //     if(!Hash::check($curr_password,Auth::user()->password)){
    //     echo 'The specified password does not match';
    //     }
    //      else{
    //          $request->user()->fill(['password' => Hash::make($new_password)])->save();
    //         echo 'Updated Successfully';
        
    //       }       
    //  }

     public function updatePassword(Request $request,$email){
         //dd($request->all());
        $request->validate([
            'password' => 'required|'
        ]);
       
        $user  = User::where('email',$email)->first();
        //dd($seller);
           
       $user->update([
            'password' => bcrypt($request->password),         
        ]);
        
        Session::flash('success', 'Password  Reset Successfully!');
        return back();  
    }
}
