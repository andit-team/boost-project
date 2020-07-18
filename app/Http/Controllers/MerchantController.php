<?php

namespace App\Http\Controllers;

use App\Mail\VendorProfileRejectMail;
use App\Mail\VendorProfilResubmitMail;
use Illuminate\Http\Request;
use Sentinel;
use App\Models\Merchant;
use App\User;
use App\Events\SellerRegistration;
use App\Models\Shop;
use App\Mail\VendorProfileApprovalMail;
use App\Mail\VendorProfileAcceptMail;
use Session;
use Baazar;
class MerchantController extends Controller{

    public function dashboard(){
        $sellerProfile = Merchant::where('user_id',Sentinel::getUser()->id)->first();
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
            'type'	    => 'merchant',
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

    public function sellOnAndbaazarPost(Request $request, Merchant $seller){

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

        Merchant::create($Seller);

        session()->flash('success','Merchant profile registration 1st stape complete successfully');

        return redirect('sell-resubmit-token'.'?slug='.$slug);
    }

    public function resubmitToken(Request $request){
        $seller = Merchant::where('slug',$request->slug)->first();


        return view('auth.merchant.resubmitToken',compact('seller'));
    }

    public function tokenUpdate(Request $request){
        $seller    = Merchant::where('slug',$request->slug)->first();

        $verify_number = mt_rand(10000,99999);

        $seller->update([
            'verification_token' => $verify_number,
        ]);

        session()->flash('success','Verify toke re-send successfully!');

        return view('auth.merchant.resubmitToken',compact('seller'));

    }

    public function verifyToken(Request $request){
        $request->validate([
            'verification_token'    => 'required|exists:merchants,verification_token|max:5'
        ]);
        $seller    = Merchant::where('slug',$request->slug)->first();
        $seller->update([
            'verification_token' => $request->verification_token,
            'slug' => $request->slug,
        ]);

        session()->flash('success','Verification Successfully!');

        return redirect('seller-registration'.'?slug='.$request->slug);

    }

    public function sellerRegistration(Request $request){
        $seller = Merchant::where('slug',$request->slug)->first();

        if(!$seller){
            return redirect('/');
        }

        return view('auth.merchant.registration',compact('seller'));
    }

    public function registrationStepOne(Request $request){

        $request->validate([
            'password'      => 'required|confirmed',
            'email'         => 'required|unique:merchants,email',
            'agreed'        => 'accepted'
        ]);

        $seller = Sentinel::registerAndActivate([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'password' 	 => $request->password,
            'type'       => 'merchant',
            'create-at'  => now(),
            ]);


        $sellerId    = Merchant::where('slug',$request->slug)->first();

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
        $seller = Merchant::where('slug',$request->slug)->first();
        if(!$seller){
            return redirect('/');
        }
        return view('auth.merchant.shopRegistration',compact('seller'));
    }

    public function shopRegistrationStore(Request $request,Shop $shop){
        $request->validate([
            'name'       => 'required',
            'slogan'     => 'required',
            'phone'      => 'required',
            'address'    => 'required',
            'zip'        => 'numeric|required',
            'email'      => 'required|unique:shops,email',
        ]);
        $sellerId = Merchant::where('slug',$request->slug)->first();
        $slug = Baazar::getUniqueSlug($shop,$request->name);
        $shope = [
            'name'      => $request->name,
            'slogan'    => $request->slogan,
            'slug'      => $slug,
            'phone'     => $request->phone,
            'email'     => $request->email,
            'web'       => $request->web,
            'lat'       => $request->lat,
            'lng'       => $request->lng,
            'address'   => $request->address,
            'zip'       => $request->zip,
            'merchant_id' => $sellerId->id,
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
            'nid'       => 'required|max:10',
        ]);
    }

    public function shopLogoCrop(Request $request){
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activesellers = Merchant::with('shop')->where('status','Active')->orderBy('id', 'DESC')->get();

        $requestSellers = Merchant::with('shop')->where('status','Inactive')->orderBy('id','DESC')->get();

        $rejectSellers = Merchant::with('shop')->where('status','Reject')->orderBy('id','DESC')->get();

        // dd($requestSellers->shop->name);

        return view('merchant.merchant.index',compact('activesellers','requestSellers','rejectSellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userprofile = Sentinel::getUser();
        $sellerProfile = Merchant::where('user_id',Sentinel::getUser()->id)->first();
        $shopProfile = Shop::where('user_id',Sentinel::getUser()->id)->first();
        if(!empty($sellerProfile))
            return view('merchant.merchant.update',compact('sellerProfile','userprofile','shopProfile'));
        else
            return view('merchant.merchant.create',compact('sellerProfile','userprofile','shopProfile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Merchant $seller)
    {
        $userprofile = Sentinel::getUser();
        $sellerId    = Merchant::where('user_id',Sentinel::getUser()->id)->first();
        $this->validateForm($request);
        $slug = Baazar::getUniqueSlug($seller,$request->first_name);
        if($sellerId){
            $sellerId->update([
                'first_name'        => $request->first_name,
                'last_name'         => $request->last_name,
                'phone'             => $request->phone,
                'email'             => $request->email,
                'picture'           => Baazar::fileUpload($request,'picture','old_image','/uploads/vendor_profile'),
                'dob'               => $request->dob,
                'nid'               => $request->nid,
                'nid_img'           => Baazar::pdfUpload($request,'nid_img','old_nid_img','/uploads/vendor_profile/nid_image'),
                'trad_img'           => Baazar::pdfUpload($request,'trad_img','old_trad_img','/uploads/vendor_profile/trad_image'),
                'gender'            => $request->gender,
                'description'       => $request->description,
                'last_visited_at'   => now(),
                'last_visited_from' => $request->last_visited_from,
                // 'verification_token' => $request->verification_token,
                // 'remember_token' => $request->remember_token,
                'user_id'           => Sentinel::getUser()->id,
                'updated_at'        => now(),
            ]);

            $userprofile->update([
                'first_name' => $request->first_name,
                'last_name'  => $request->last_name,
                'email'      => $request->email,
                'updated_at' => now(),
            ]);

            session()->flash('success','your profile is updated');
            return back();

        }else{
            $sellerId=Merchant::create([
                'first_name'        => $request->first_name,
                'last_name'         => $request->last_name,
                'slug'              => $slug,
                'phone'             => $request->phone,
                'email'             => $request->email,
                'picture'           => Baazar::fileUpload($request,'picture','','/uploads/vendor_profile'),
                'dob'               => $request->dob,
                'nid'               => $request->nid,
                'nid_img'           => Baazar::pdfUpload($request,'nid_img','','/uploads/vendor_profile/nid_image'),
                'trad_img'          => Baazar::pdfUpload($request,'trad_img','','/uploads/vendor_profile/trad_image'),
                'gender'            => $request->gender,
                'description'       => $request->description,
                'last_visited_at'   => now(),
                'last_visited_from' => $request->last_visited_from,
                // 'verification_token' => $request->verification_token,
                // 'remember_token' => $request->remember_token,
                'user_id'           => Sentinel::getUser()->id,
                'created_at'        => now(),
            ]);

            $userprofile->update([
                'first_name' => $request->first_name,
                'last_name'  => $request->last_name,
                'email'      => $request->email,
                'updated_at' => now(),
            ]);



            \Mail::to($sellerId)->send(new VendorProfileApprovalMail($sellerId));
            session()->flash('success','Thanks for create profile! Your Message Sent Successfully');
            return back();
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seller = Merchant::find($id);

        return view('merchant.merchant.show',compact('seller'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $userprofile = Sentinel::getUser();
        $seller = Merchant::where('slug',$slug)->first();
        $shopProfile = Shop::where('user_id',Sentinel::getUser()->id)->first();
        return view('merchant.merchant.edit',compact('seller','userprofile','shopProfile'));
    }

    public function update(Request $request, $slug)
    {

        $userprofile = Sentinel::getUser();
        $sellerProfile = Merchant::where('slug',$slug)->first();
        $this->validateForm($request);

        $data = [
            'first_name'        => $request->first_name,
            'last_name'         => $request->last_name,
            'phone'             => $request->phone,
            'email'             => $request->email,
            'picture'           => Baazar::fileUpload($request,'picture','old_image','/uploads/vendor_profile'),
            'dob'               => $request->dob,
            'gender'            => $request->gender,
            'description'       => $request->description,
            'last_visited_at'   => now(),
            'last_visited_from' => $request->last_visited_from,
            // 'verification_token' => $request->verification_token,
            // 'remember_token' => $request->remember_token,
            'status'            => 'Inactive',
            'user_id'           => Sentinel::getUser()->id,
            'updated_at'        => now(),
        ];

        $sellerProfile->update($data);

        $userprofile->update([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'email'      => $request->email,
            'updated_at' => now(),
        ]);

        $name    = $data['first_name'];
        $surname = $data['last_name'];

        \Mail::to($data['email'])->send(new VendorProfilResubmitMail($data,$name,$surname));

        Session::flash('success', 'Profile Resubmit successfully!');

        return redirect('merchant/merchant');
    }

    public function approvement($id){

        $data = Merchant::where('id',$id)->first();


        $data->update(['status' => 'Active']);
        $name    = $data['first_name'];
        $surname = $data['last_name'];
         \Mail::to($data['email'])->send(new VendorProfileAcceptMail($data,$name,$surname));

        session()->flash('success','Profile Approved Successfully and Sent Mail to the user');

        return back();

    }

    public function rejected(Request $request,$id){

        $data = Merchant::where('id',$id)->first();


        $data->update([
            'status'   => 'Reject',
            'rej_desc' => $request->rej_desc,
        ]);

        $name    = $data['first_name'];
        $surname = $data['last_name'];
        $rej_desc = $data['rej_desc'];
        \Mail::to($data['email'])->send(new VendorProfileRejectMail($data,$name,$surname,$rej_desc));

        session()->flash('warning','Profile Rejected Successfully and Sent Mail to the user');

        return back();

    }



    }
