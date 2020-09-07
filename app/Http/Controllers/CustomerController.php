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
use App\Models\PaymentCard;
use App\Mail\WelcomeNotificationMail;

class CustomerController extends Controller{
    public function __construct(){
        $this->middleware(['auth','customer'])->except('register','userlogin','registration','userloginprocess','forgot','password');
    }

    public function dashboard(){
        $orders = Order::where('user_id',Sentinel::getUser()->id)->get();
        // dd($purchase); 
        $i = 0;
        return view('customer-dashboard',compact('orders','i'));
    }


    public function register(){
        return view('auth.customer.register');
    }

    public function registration(Request $request, User $user){
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
		    'type' 	    => 'customer',
		];
        $customer = Sentinel::registerAndActivate($data);
        // $mailes = $customer['email'];
        // dd($mailes);
        $customerFirstName = $data['first_name'];
        $customerLastName = $data['last_name'];
        \Mail::to($customer['email'])->send(new WelcomeNotificationMail($customer,$customerFirstName,$customerLastName));
        $role = \Sentinel::findRoleBySlug($request->account);
        $role->users()->attach($customer->id); 
        $credentials = [
			'email'		=> $customer->email,
			'password'	=> $request->password,
			'type'	    => 'customer',
		];
        Sentinel::authenticate($credentials); 
        if(session()->has('user_id'))
            Cart::where('user_id',session('user_id'))->update(['user_id'=> Sentinel::getUser()->id]);
            Order::where('user_id',session('user_id'))->update(['user_id'=>Sentinel::getUser()->id]); 
            session()->forget('user_id');

        // if($request->has('information')){
        //     session()->flash('success','registration  successfully');
        //    return redirect('orders/payment-deatils');
        // }elseif($request->has('register')){
        //     session()->flash('success','registration  successfully');
        //     return redirect('dashboard');
        // } 
        Session::flash('success','Registration Successfully!');
        if(session()->has('invoice'))
            if($customer->card)
                return redirect('orders/edit/payment-deatils');
            else
                return redirect('orders/payment-deatils');
        else
            return redirect('dashboard');
        
    }

    public function userloginprocess(Request $request){
        // dd($request->all());
        $credentials = [
			'email'		=> $request->login['email'],
			'password'	=> $request->login['password'],
			'type'	    => 'customer',
		];
		$user = Sentinel::authenticate($credentials);
        // dd($user);
        if($user){
            if(session()->has('user_id'))
                Cart::where('user_id',session('user_id'))->update(['user_id'=> Sentinel::getUser()->id]);
                Order::where('user_id',session('user_id'))->update(['user_id'=>Sentinel::getUser()->id]);
                session()->forget('user_id');

            Session::flash('success','You are log in...');
            if($user)
                if(session()->has('invoice'))
                    if($user->card)
                        return redirect('orders/edit/payment-deatils');
                    else
                        return redirect('orders/payment-deatils');
                else
                    return redirect('dashboard');
            else
                return redirect('login')->with('error', 'Invalid email or password');
        }
        // return redirect()->back();
        return redirect('login')->with('error','Sorry you are not loggedin.');
    }

    public function userlogin(){
        if(Sentinel::check()){
            return redirect('dashboard');
        }
        return view('auth.customer.login');
    }

// Forgot password......
    public function forgot(){
        return view('auth.customer.forgotpassword');
    }

    public function password(Request $request){
        die('on development');
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

    public function customerprofile(){
        $customer = Sentinel::getUser();  
        // dd($customer);
        

        return view('frontend.customers.update',compact('customer'));
    }

    public function customerprofilestore(Request $request){
        $customer = Sentinel::getUser();  
        
        

        $data = [
            'first_name'=> $request->first_name, 
            'last_name' => $request->last_name,
            'email' 	=> $request->email,
            'password' 	=> bcrypt($request->password),
            'updated_at'=> now(),
        ];
        $customer->update($data);
        Session::flash('success', 'Profile update Successfully!');
        return redirect()->back();

    }

    public function customershipping(){
        $shipping = Sentinel::getUser();
        return view('frontend.shipping.update',compact('shipping'));
    }

    public function customershippingstore(Request $request){
        $shipping = Sentinel::getUser();
        $data = [
            'address_1'  => $request->address_1,
            'address_2'  => $request->address_2,
            'postcode'   => $request->postcode,
            'town'       => $request->town,
            'update_now' => now(),
        ];
        $shipping->update($data);
        Session::flash('success', 'Profile update Successfully!');
        return redirect()->back();
    }

    public function customerbilling(){ 
        $billing= PaymentCard::where('user_id',Sentinel::getUser()->id)->first();
        if($billing){
            return view('frontend.billing.update',compact('billing'));
        }else{
            return view('frontend.billing.edit');
        }
        
    }

    public function customerbillingstore(Request $request){
        $billing= PaymentCard::where('user_id',Sentinel::getUser()->id)->first();
        if($billing){
            $data = [
                'type'              => $request->type,
                'name'              => $request->name,
                'card_number'       => $request->card_number,
                'mmyy'              => $request->mmyy,
                'cc'                => $request->cc,
                'postCode'          => $request->postCode,
                'address1'          => $request->address1,
                'address2'          => $request->address2,
                'town'              => $request->town,
                'subcription'       => $request->subcription,
                'aggredTc'          => $request->aggredTc,
                'sameAsShipping'    => $request->sameAsShipping,
                'updated_at'        => now()
            ];
    
            $billing->update( $data); 
        }else{
            $data = [
                'type'              => $request->type,
                'name'              => $request->name,
                'card_number'       => $request->card_number,
                'mmyy'              => $request->mmyy,
                'cc'                => $request->cc,
                'postCode'          => $request->postCode,
                'address1'          => $request->address1,
                'address2'          => $request->address2,
                'town'              => $request->town,
                'subcription'       => $request->subcription,
                'aggredTc'          => $request->aggredTc,
                'sameAsShipping'    => $request->sameAsShipping,
                'user_id'           =>Sentinel::getUser()->id, 
                'updated_at'        => now(),
            ];
            PaymentCard::create($data);
        } 
        Session::flash('success', 'Billing update Successfully!');
        return redirect()->back();
    }

    public function bussinessprofile(){
        $business = Sentinel::getUser();
        // dd($business);
        return view('frontend.bussinessprofile.update',compact('business'));
    }

    public function bussinessprofilestore(Request $request){
        $business = Sentinel::getUser();

        $data = [
            'first_name'=> $request->first_name, 
            'last_name' => $request->last_name,
            'com_name' => $request->com_name,
            'com_phone' => $request->com_phone,
            'com_address' => $request->com_address,
            'com_vat' => $request->com_vat, 
            'file_1'=> Boost::pdfUpload($request,'file_1','old_file_1','/uploads/customer_profile'), 
            'file_2' => Boost::pdfUpload($request,'file_2','old_file_2','/uploads/customer_profile'),
            'email' 	=> $request->email,
            'update_at' => now(),
        ]; 
        
        $business->update($data);

        Session::flash('success', 'Bussiness Profile update Successfully!');
        return redirect()->back();
    }


    public function orderHistory(){
        $orders = Order::where('user_id',Sentinel::getUser()->id)->get();
        $i = 0;

        return view('frontend.orderhistory.orderhistory',compact('orders','i'));
    }

    public function invoice($invoice){
        $order = Order::where('invoice',$invoice)->where('user_id',Sentinel::getUser()->id)->first();
        $i = 0;
        $total = 0;
        $subtotal = 0;
        return view('frontend.order.invoice',compact('order','i','total','subtotal'));
        // dd($order); 
    }
 
}
