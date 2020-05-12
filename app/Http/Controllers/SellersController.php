<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Mail\VendorProfileApprovalMail;
use App\Mail\VendorProfileAcceptMail;
use Sentinel;
use Baazar;

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
        //dd($sellers);
        return view('merchant.sellers.index',compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sellerProfile = Seller::where('user_id',Sentinel::getUser()->id)->first();
        //dd($sellerProfile);
       return view('merchant.sellers.create',compact('sellerProfile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sellerId = Seller::where('user_id',Sentinel::getUser()->id)->first();
        //dd($sellerId);
        $this->validateForm($request);
        if($sellerId){
            $sellerId->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'picture' => Baazar::fileUpload($request,'picture','old_image','/uploads/vendor_profile'),
                'dob'  =>$request->dob,
                'gender' => $request->gender,
                'description' => $request->description,
                'last_visited_at' => $request->last_visited_at,
                'last_visited_from' => $request->last_visited_from,
                'verification_token' => $request->verification_token,
                'remember_token' => $request->remember_token,
                'user_id' => Sentinel::getUser()->id,
                'updated_at' => now(),
            ]);
        }else{
            $sellerId=Seller::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'picture' => Baazar::fileUpload($request,'picture','','/uploads/vendor_profile'),
                'dob'  =>$request->dob,
                'gender' => $request->gender,
                'description' => $request->description,
                'last_visited_at' => $request->last_visited_at,
                'last_visited_from' => $request->last_visited_from,
                'verification_token' => $request->verification_token,
                'remember_token' => $request->remember_token,
                'user_id' => Sentinel::getUser()->id,
                'updated_at' => now(),
            ]);

            \Mail::to($sellerId)->send(new VendorProfileApprovalMail($sellerId));
            session()->flash('message','Thanks for create profile! Your Message Sent Successfully');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {
        //$seller = Seller::where('user_id',Sentinel::getUser()->id)->first();
        //dd($seller);
        return view('merchant.sellers.edit',compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seller $seller)
    {
        //$seller= Seller::where('user_id',Sentinel::getUser()->id)->first();
        //dd($seller);
        $this->validateForm($request);

            $data = [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'picture' => Baazar::fileUpload($request,'picture','old_image','/uploads/vendor_profile'),
                'dob'  =>$request->dob,
                'gender' => $request->gender,
                'description' => $request->description,
                'last_visited_at' => $request->last_visited_at,
                'last_visited_from' => $request->last_visited_from,
                'verification_token' => $request->verification_token,
                'remember_token' => $request->remember_token,
                'user_id' => Sentinel::getUser()->id,
                'updated_at' => now(),
            ];

            $seller->update($data);

           $name = $data['name'];

        \Mail::to($data['email'])->send(new VendorProfileAcceptMail($data,$name));

        return back();
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

    private function validateForm($request){
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'description' => 'required',
        ]);
    }
}
