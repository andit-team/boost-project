<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Mail\VendorProfileApprovalMail;
use App\Mail\VendorProfileAcceptMail;
use App\Mail\VendorProfileRejectMail;
use App\Mail\VendorProfilResubmitMail;
use App\Models\Shop;
use Sentinel;
use Baazar;
use Session;

class SellersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Seller::orderBy('id', 'DESC')->get();
        $activesellers = Seller::with('shop')->where('status','Active')->orderBy('id', 'DESC')->get();
        //dd($activesellers);
        $requestSellers = Seller::with('shop')->where('status','Inactive')->orderBy('id','DESC')->get();
        $rejectSellers = Seller::with('shop')->where('status','Reject')->orderBy('id','DESC')->get();
        //dd($sellers);
        return view('merchant.sellers.index',compact('sellers','activesellers','requestSellers','rejectSellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userprofile = Sentinel::getUser();
        //dd($userprofile);
        $sellerProfile = Seller::where('user_id',Sentinel::getUser()->id)->first();
        $shopProfile = Shop::where('user_id',Sentinel::getUser()->id)->first();
        //dd($sellerProfile);
        if(!empty($sellerProfile))
           return view('merchant.sellers.update',compact('sellerProfile','userprofile','shopProfile'));
         else
           return view('merchant.sellers.create',compact('sellerProfile','userprofile','shopProfile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Seller $seller)
    {
        $userprofile = Sentinel::getUser();
        $sellerId    = Seller::where('user_id',Sentinel::getUser()->id)->first();
        //dd($sellerId);
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
            $sellerId=Seller::create([
                'first_name'        => $request->first_name,
                'last_name'         => $request->last_name,
                'slug'              => $slug,
                'phone'             => $request->phone,
                'email'             => $request->email,
                'picture'           => Baazar::fileUpload($request,'picture','','/uploads/vendor_profile'),
                'dob'               =>$request->dob,
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
        $seller = Seller::find($id); 

        return view('merchant.sellers.show',compact('seller'));
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
        $seller = Seller::where('slug',$slug)->first(); 
        return view('merchant.sellers.edit',compact('seller','userprofile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
      
        $userprofile = Sentinel::getUser();
        $sellerProfile = Seller::where('slug',$slug)->first();
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

        return redirect('merchant/seller');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function approvement($id){

        $data = Seller::where('id',$id)->first();
        
        
        $data->update(['status' => 'Active']);
        //dd($data);
         $name    = $data['first_name'];
         $surname = $data['last_name'];
        \Mail::to($data['email'])->send(new VendorProfileAcceptMail($data,$name,$surname));

        session()->flash('success','Profile Approved Successfully and Sent Mail to the user');

        return back();

    }

    public function rejected(Request $request,$id){

        $data = Seller::where('id',$id)->first();
        

        $data->update([
            'status'   => 'Reject',
            'rej_desc' => $request->rej_desc,
        ]);
        //dd($data);

         $name    = $data['first_name'];
         $surname = $data['last_name'];
         $rej_desc = $data['rej_desc'];
        \Mail::to($data['email'])->send(new VendorProfileRejectMail($data,$name,$surname,$rej_desc));

        session()->flash('warning','Profile Rejected Successfully and Sent Mail to the user');

        return back();

    }
    

    private function validateForm($request){
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'description' => 'required',
        ]);
    }
}
