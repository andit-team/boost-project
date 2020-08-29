<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\User;
use Session;
use Reminder;
use Mail;
use App\Events\CustomerRegistration;
use App\Models\Customer;
use App\Models\Cart;
use App\Models\Order;
use Boost;

class CustomerController extends Controller{
    public function __construct(){
        $this->middleware(['auth','customer'])->except('register','userlogin','registration','userloginprocess');
    }

    public function dashboard(){
        return view('buyer-dashboard');
    }

    public function register(){
        return view('auth.customer.register');
    }

    public function registration(Request $request){
        // dd($request->all());
        $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required|email|unique:App\User,email',
            'password'      => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6',
            'postcode'      => 'required',
            'address_1'     => 'required',
            // 'address_2'     => 'required',
            'town'          => 'required',
            'account'       => 'required',
        ]);
        $data = [
		    'first_name'=> $request->first_name,
            'last_name' => $request->last_name,
            'com_name' => $request->com_name,
            'com_phone' => $request->com_phone,
            'com_address' => $request->com_address,
            'com_vat' => $request->com_vat,
            'or_name' => $request->or_name,
            'or_phone' => $request->or_phone,
            'or_address' => $request->or_address,
            'account' => $request->account,
            'or_reg' => $request->or_reg, 
            'file_1'=> Boost::pdfUpload($request,'file_1','','/uploads/customer_profile'), 
            'file_2' => Boost::pdfUpload($request,'file_2','','/uploads/customer_profile'),
            'address_1' => $request->address_1,
            'address_2' => $request->address_2,
            'postcode' => $request->postcode,
            'town' => $request->town,
		    'email' 	=> $request->email,
		    'password' 	=> $request->password,
		    'type' 	    => $request->account,
		];
        $customer = Sentinel::registerAndActivate($data);
        $role = \Sentinel::findRoleBySlug($request->account);
        $role->users()->attach($customer->id);

        $credentials = [
			'email'		=> $customer->email,
			'password'	=> $request->password,
			'type'	    => $request->account,
		];
        Sentinel::authenticate($credentials);
        Cart::where('user_id',session('user_id'))->update(['user_id'=> Sentinel::getUser()->id]);
        Order::where('user_id',session('user_id'))->update(['user_id'=>Sentinel::getUser()->id]);
        session()->forget('user_id');
        session()->flash('success','registration  successfully');
        return redirect('orders/payment-deatils');
    }

    public function userloginprocess(Request $request){
        $credentials = [
			'email'		=> $request->login['email'],
			'password'	=> $request->login['password'],
			'type'	    => 'customer',
		];

		// if($request->remember == 'on')
		// 	$user = Sentinel::authenticateAndRemember($credentials);
		// else
			$user = Sentinel::authenticate($credentials);
        // dd($user);
		if($user)
			return redirect('dashboard');
		else
			return redirect('login')->with('error', 'Invalid email or password');
    }

    public function userlogin(){
        return view('auth.customer.login');
    }

// Forgot password......
    public function forgot(){
        return view('auth.customer.forgotpassword');
    }

    public function password(Request $request){

        //   dd($request->all());

          $user = User::whereEmail($request->email)->first();

          if($user == null){

            return redirect()->back()->with(['error'=> 'Email not exists']);
          }

          $user = Sentinel::findById($user->id);

          $reminder = Reminder::exists($user) ? : Reminder::create($user);

          $this->sendEmail( $user);

          return redirect()->back()->with(['success'=> 'Reset code sent to your emai']);
            // return view('auth.merchant.setnewpassword');
           }

           public function sendEmail($user){
               Mail::send(
                   'admin.emails.customerforgot',
                   ['user' => $user],
                   function($message) use ($user) {
                       $message->to($user->email);
                       $message->subject("$user->name,Reset Your password");
                   }
                );
           }
    // Reset Password.....

    public function reset(Request $request){

        $email = User::whereEmail($request->email)->first();
        // $user = User::all();
        return view('auth.customer.resetpassword',compact('email'));
    }

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
        return redirect('login');
    }

}
