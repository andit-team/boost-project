<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Models\Seller;
use App\User;
use App\Events\SellerRegistration;
use App\Models\Shop;
use App\Mail\VendorProfileApprovalMail;
use Session;
use Baazar;
class MerchantController extends Controller{

    public function dashboard(){
        $sellerProfile = Seller::where('user_id',Sentinel::getUser()->id)->first();
        $shopProfile = Shop::where('user_id',Sentinel::getUser()->id)->first(); 
       return view('vendor-deshboard',compact('sellerProfile','shopProfile'));
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
            return redirect('merchant/dashboard');
        else
            //die('somer error here...');
            return redirect('merchant/login')->with('error', 'Invalid email or password');
    }

    public function sellOnAndbaazar(){
        return view('merchant.sell-on-andbaazar');
    }

    public function sellOnAndbaazarPost(Request $request,Seller $seller){ 

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

        session()->flash('success','Seller profile registration 1st stape complete successfully');  

        return redirect('sell-resubmit-toke'.'?slug='.$slug);
    }

    public function resubmitToken(Request $request){
        $seller = Seller::where('slug',$request->slug)->first();
        
       
        return view('auth.merchant.resubmitToken',compact('seller'));
    }

    public function tokenUpdate(Request $request){
        $seller    = Seller::where('slug',$request->slug)->first();
        
        $verify_number = mt_rand(10000,99999);
       
        $seller->update([
            'verification_token' => $verify_number,
        ]); 

        session()->flash('success','Verify toke re-send successfully!');

        return view('auth.merchant.resubmitToken',compact('seller'));

    }

    public function verifyToken(Request $request){
        $request->validate([
            'verification_token'    => 'required|exists:sellers,verification_token|max:5'
        ]);
       
        $seller    = Seller::where('slug',$request->slug)->first();
       
        
       
       $seller->update([
            'verification_token' => $request->verification_token,
            'slug' => $request->slug,
        ]);

        session()->flash('success','Verification Successfully!');

        return redirect('seller-registration'.'?slug='.$request->slug);
    
    }

    public function sellerRegistration(Request $request){
        $seller = Seller::where('slug',$request->slug)->first();
        
        return view('auth.merchant.registration',compact('seller'));
    }

    public function registrationStepOne(Request $request){ 

        $request->validate([   
            'password'      => 'required|confirmed',
            'email'         => 'required|unique:sellers,email',
            'agreed'        => 'accepted' 
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
                'status'             => 'Inactive',
                'user_id'            =>  $seller->id,
                'updated_at'         => now(),
            ]);
       
            // \Mail::to($sellerId)->send(new VendorProfileApprovalMail($sellerId));
   
        session()->flash('success','Registration Successfully!');
        
        return redirect('seller-shope-registration'.'?slug='.$request->slug);
    }

    public function shopRegistration(Request $request){
        $seller = Seller::where('slug',$request->slug)->first();
        return view('auth.merchant.shopRegistration',compact('seller'));
    }

    public function shopRegistrationStore(Request $request){
        // dd($request->all());
        $request->validate([
            'name'       => 'required', 
            'phone'      => 'required',
            'address'    => 'required',
            'zip'        => 'numeric|required',
            'email'      => 'required|unique:shops,email',
        ]);
        $sellerId = Seller::where('slug',$request->slug)->first();

        $shope = [
            'name'      => $request->name,
            'slug'      => $request->slug,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'web'       => $request->web,
            'lat'       => $request->lat,
            'lng'       => $request->lng,
            'address'   => $request->address,
            'zip'       => $request->zip,
            'seller_id' => $sellerId->id,
            'user_id'   => $sellerId->user_id,
            'create_at' => now(),
        ];

        Shop::create($shope); 
        
        session()->flash('success','Shop registration Successfully!');

        return redirect('merchant/login');
    }

    public function termsCondtion(){
        return view('frontend.termsCondition');
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
        ]);
    }

    public function shopLogoCrop(Request $request){
        // dd($request->all());
        $shop   = Shop::find($request->shop);
        if($shop){
            $image_file = $request->image;
            list($type, $image_file) = explode(';', $image_file);
            list(, $image_file)      = explode(',', $image_file);
            $image_file = base64_decode($image_file);
            $image_name= "shop-".$shop->id.'.png';
            $db_img = 'uploads/shops/logos/'.$image_name;
            $path = public_path($db_img);
            file_put_contents($path, $image_file);
            $done = $shop->update(['logo' => $db_img]);
            // session()->forget('logininfo');
            // Session::push('logininfo', $this->sessionData($customer));
            if($done){
                return response()->json(['status'=>true]);
            }
        }
    }

    public function shopBanarCrop(Request $request){
        // dd($request->all());
        $shop   = Shop::find($request->shop);
        if($shop){
            $image_file = $request->image;
            list($type, $image_file) = explode(';', $image_file);
            list(, $image_file)      = explode(',', $image_file);
            $image_file = base64_decode($image_file);
            $image_name= "banner-".$shop->id.'.png';
            $db_img = 'uploads/shops/banners/'.$image_name;
            $path = public_path($db_img);
            file_put_contents($path, $image_file);
            $done = $shop->update(['banner' => $db_img]);
            // session()->forget('logininfo');
            // Session::push('logininfo', $this->sessionData($customer));
            if($done){
                return response()->json(['status'=>true]);
            }
        }
    }

    }