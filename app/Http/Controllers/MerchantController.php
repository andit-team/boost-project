<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Models\Seller;
use App\User;
use App\Events\SellerRegistration;
use App\Models\Shop;
use Session;
use Baazar;
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
            return redirect('merchant/login')->with('error', 'Invalid email or password');
    }

    public function sellOnAndbaazar(){
        return view('merchant.sell-on-andbaazar');
    }

    public function sellOnAndbaazarPost(Request $request,Seller $seller){
        //dd($request->all());

        $request->validate([
            'first_name' => 'required',
            'last_name'  => 'required',
            'phone'      => 'required',
        ]);
        $slug = Baazar::getUniqueSlug($seller,$request->first_name); 
        $verify_number = mt_rand(10000,99999);
        $Seller = ([
            'first_name'         => $request->first_name,
            'last_name'          => $request->last_name,
            'slug'               => $slug,
            'phone'              => $request->phone,
            'verification_token' => $verify_number, 
            'created_at' => now(),
        ]);

        Seller::create($Seller);

        Session::flash('success', 'Profile create successfully!');  

        return redirect('sell-resubmit-toke'.'?slug='.$slug);
    }

    public function resubmitToken(Request $request){
        $seller = Seller::where('slug',$request->slug)->first();
        //dd($seller); 
        return view('auth.merchant.resubmitToken',compact('seller'));
    }

    public function tokenUpdate(Request $request){
        $seller    = Seller::where('slug',$request->slug)->first();
        // dd($seller);
        $verify_number = mt_rand(10000,99999);
       
        $seller->update([
            'verification_token' => $verify_number,
        ]); 

        return view('auth.merchant.resubmitToken',compact('seller'));

    }

    public function verifyToken(Request $request){
        $request->validate([
            'verification_token'    => 'required|exists:sellers,verification_token'
        ]);
       
        $seller    = Seller::where('slug',$request->slug)->first();
        //dd($seller);
        
       
       $seller->update([
            'verification_token' => $request->verification_token,
            'slug' => $request->slug,
        ]);
        return redirect('seller-registration'.'?slug='.$request->slug);
    
    }

    public function sellerRegistration(Request $request){
        $seller = Seller::where('slug',$request->slug)->first();
        //dd($seller);
        return view('auth.merchant.registration',compact('seller'));
    }

    public function registrationStepOne(Request $request){ 

        $request->validate([ 
            'password'   => 'required',
            'email'      => 'required|unique:sellers',
            'aggred'     =>'accepted'
        ]);
        
        $seller = Sentinel::registerAndActivate([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'password' 	 => $request->password,
            'type'       => 'sellers', 
            'create-at'  => now(),
            ]);
      

        $sellerId    = Seller::where('slug',$request->slug)->first();

        
       
            $sellerId->update([
                'first_name'         => $sellerId->first_name,
                'last_name'          => $sellerId->last_name,
                'phone'              => $sellerId->phone,
                'email'              => $request->email, 
                'dob'                => $request->dob,
                'gender'             => $request->gender,
                'description'        => $request->description,
                'last_visited_at'    => now(),
                'last_visited_from'  => $request->last_visited_from,
                'verification_token' => $request->verification_token, 
                'user_id'            =>  $seller->id,
                'updated_at'         => now(),
            ]);
       
    

   
       
        
        return redirect('seller-shope-registration'.'?slug='.$request->slug);
    }

    public function shopRegistration(Request $request){
        $seller = Seller::where('slug',$request->slug)->first();
        return view('auth.merchant.shopRegistration',compact('seller'));
    }

    public function shopRegistrationStore(Request $request){
        $request->validate([
            'name'       => 'required', 
            'phone'      => 'required|unique:shops',
        ]);
        $sellerId = Seller::where('slug',$request->slug)->first(); 
            $shope = [
                'name'      => $request->name,
                'slug'      => $request->slug,
                'phone'     => $request->phone,
                'email'     => $request->email,
                'web'       => $request->web,
                'seller_id' => $sellerId->id,
                'user_id'   => $sellerId->user_id,
                'create_at' => now(),
            ];
    
            Shop::create($shope); 
        // }

        return redirect('merchant/login');
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

    private function validateForm($request){
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone'     => 'required',
            // 'email' => 'required|unique:sellers',
            // 'dob' => 'required',
            // 'gender' => 'required',
            // 'description' => 'required',
        ]);
    }

    }