<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;
use App\Models\BuyerShippingAddress;
use Sentinel;
use Session;

class BuyerShippingAddressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $buyerShippingAddress = BuyerShippingAddress::where('user_id',Sentinel::getUser()->id)->get();
        return view('frontend.buyer_shipping_addresses.index',compact('buyerShippingAddress'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.buyer_shipping_addresses.create');
    }

    public function store(Request $request){
        
        $buyerId = Buyer::where('user_id',Sentinel::getUser()->id)->first();
        $this->validateForm($request);
        // $buyerShippingAddress = BuyerShippingAddress::updateOrCreate(['buyer_id' =>$buyerId->id],[
            if( $buyerId){
            $data =[
                'location'      => $request->location,
                'address'       => $request->address,
                'country'       => $request->country,
                'state'         => $request->state,
                'city'          => $request->city,
                'zip_code'      => $request->zip_code,
                'phone'         => $request->phone,
                'fax'           => $request->fax,
                'buyer_id'      => $buyerId->id,
                'user_id'       => Sentinel::getUser()->id,
                'created_at'    => now(),
            ];
            BuyerShippingAddress::create($data);
            Session::flash('success','Shipping address added succeeded!');
            return redirect('profile/shipping');
        }
        
        return redirect('profile/shipping');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BuyerShippingAddress $shipping)
    {
        //$buyerShippingAddress = BuyerShippingAddress::find($id);         
        return view('frontend.buyer_shipping_addresses.edit',compact('shipping'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuyerShippingAddress $shipping)
    {     
        $this->validateForm($request);
        // $buyerShippingAddress = BuyerShippingAddress::updateOrCreate(['buyer_id' =>$buyerId->id],[
            $data =[
                'location'      => $request->location,
                'address'       => $request->address,
                'country'       => $request->country,
                'state'         => $request->state,
                'city'          => $request->city,
                'zip_code'      => $request->zip_code,
                'phone'         => $request->phone,
                'fax'           => $request->fax,             
                'updated_at'    => now(),
            ];           
           $shipping->update($data);
           Session::flash('success','Shipping address Updated succeeded!');
           return redirect('profile/shipping');
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
            'location' => 'required',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'phone' => 'required',
        ]);
    }
}
