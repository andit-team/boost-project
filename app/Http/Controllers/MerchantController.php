<?php

namespace App\Http\Controllers;

use App\Mail\VendorProfileRejectMail;
use App\Mail\VendorProfilResubmitMail;
use Illuminate\Http\Request;
use Sentinel;
use App\Models\Merchant;
use App\Models\Geo\Division;
use App\User;
use App\Events\SellerRegistration;
use App\Models\Shop;
use App\Models\Reject;
use App\Models\RejectValue;
use App\Mail\VendorProfileApprovalMail;
use App\Mail\VendorProfileAcceptMail;
use Session;
use Boost;
use App\Models\Country;
class MerchantController extends Controller{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merchant = Merchant::all();
        
        return view('merchant.merchant.index',compact('merchant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $country = Country::all();
           
            return view('merchant.merchant.create',compact('country'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Merchant $merchant)
    {

            $slug = Boost::getUniqueSlug($merchant,$request->first_name);
            
            $merchantId=Merchant::create([
                'first_name'    => $request->first_name,
                'last_name'     => $request->last_name,
                'slug'          => $slug,
                'shop_name'     => $request->shop_name,
                'email'         => $request->email,
                'phone_number'  => $request->phone_number,
                'vat'           => $request->vat,
                'post_code'     => $request->post_code,
                'city'          => $request->city,
                'address_1'     => $request->address_1,
                'address_2'     => $request->address_2,
                'county'        => $request->county,
                'fax'           => $request->fax,
                'merchant_file' => Boost::pdfUpload($request,'merchant_file','','/uploads/merchant_profile'), 
                'country_id'    => $request->country_id,
                'user_id'       => Sentinel::getUser()->id,
                'created_at'    => now(), 
            ]);

           


            // \Mail::to($sellerId)->send(new VendorProfileApprovalMail($sellerId));
            session()->flash('success','Marchant create successfully');
           
      

            return redirect('boostadmin/merchant');
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
        $country = Country::all();
        $merchent = Merchant::where('slug',$slug)->first();
        
        return view('merchant.merchant.edit',compact('merchent','country'));
    }

    public function update(Request $request, $slug)
    {

       
        $merchent = Merchant::where('slug',$slug)->first();
        // $this->validateForm($request);

        $data = [ 
                'first_name'    => $request->first_name,
                'last_name'     => $request->last_name,
                'slug'          => $slug,
                'shop_name'     => $request->shop_name,
                'email'         => $request->email,
                'phone_number'  => $request->phone_number,
                'vat'           => $request->vat,
                'post_code'     => $request->post_code,
                'city'          => $request->city,
                'address_1'     => $request->address_1,
                'address_2'     => $request->address_2,
                'county'        => $request->county,
                'fax'           => $request->fax,
                'merchant_file' => Boost::pdfUpload($request,'merchant_file','old_image','/uploads/merchant_profile'), 
                'country_id'    => $request->country_id, 
                'updated_at'    => now(), 
        ];

        $merchent->update($data);

        
        // $name    = $data['first_name'];
        // $surname = $data['last_name'];

        // \Mail::to($data['email'])->send(new VendorProfilResubmitMail($data,$name,$surname));

        Session::flash('success', 'Merchant Profile Update successfully!');

        return redirect('boostadmin/merchant');
    }

    

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $merchant = Merchant::find($id);
        $merchant->delete();
        Session::flash('error', 'Merchant Deleted Successfully!');
        return redirect('boostadmin/merchant');
    }

    



    }
