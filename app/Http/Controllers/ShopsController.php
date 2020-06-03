<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Seller;
use Sentinel;
use Baazar;
use Session;

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop = Shop::all();
        $seller = Seller::all();
        return view('admin.shop_list.index',compact('shop','seller'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sellerProfile = Seller::where('user_id',Sentinel::getUser()->id)->first();
        $shopProfile = Shop::where('user_id',Sentinel::getUser()->id)->first();
        return view('merchant.shops.update',compact('sellerProfile','shopProfile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $shop = Shop::where('user_id',Sentinel::getUser()->id)->first();
        //dd($shop);
        $this->validateForm($request);
       
            $shop->update([
                'name'              => $request->name, 
                'phone'             => $request->phone,
                'logo'              => Baazar::fileUpload($request,'logo','old_image','/uploads/shop_logo'),
                'google_location'   => $request->google_location,
                'featured'          => $request->featured,
                'email'             => $request->email,
                'web'               => $request->web,
                'description'       => $request->description, 
                'updated_at'        => now(),
            ]);
       

        session()->flash('success','your shop profile updated');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
            'phone' => 'required', 
            'email' => 'required',  
            'description' => 'required',
        ]);
    }
}
