<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\CustomerShippingAddress;
use Sentinel;
use Session;
use Baazar;

class CustomerShippingAddressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $buyerShippingAddress = CustomerShippingAddress::where('user_id',Sentinel::getUser()->id)->get();
        return view('frontend.customer_shipping_addresses.index',compact('buyerShippingAddress'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.customer_shipping_addresses.create');
    }

    public function store(Request $request,CustomerShippingAddress $shipping){

        $customerId = Customer::where('user_id',Sentinel::getUser()->id)->first();
        $this->validateForm($request);
        // $buyerShippingAddress = CustomerShippingAddress::updateOrCreate(['buyer_id'=>$buyerId->id],[
            if( $customerId){
            $data =[
                'location'          => $request->location,
                'address'           => $request->address,
                'country'           => $request->country,
                'state'             => $request->state,
                'city'              => $request->city,
                'zip_code'          => $request->zip_code,
                'phone'             => $request->phone,
                'fax'               => $request->fax,
                'customer_id'       => $customerId->id,
                'user_id'           => Sentinel::getUser()->id,
                'created_at'        => now(),
            ];
            CustomerShippingAddress::create($data);
            Session::flash('success','Shipping address added succeeded!');
            return redirect('customer/shipping');
        }

        return redirect('customer/shipping');
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
    public function edit(CustomerShippingAddress $shipping)
    {

        return view('frontend.customer_shipping_addresses.edit',compact('shipping'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerShippingAddress $shipping)
    {
        $this->validateForm($request);
            $data =[
                'location'          => $request->location,
                'address'           => $request->address,
                'country'           => $request->country,
                'state'             => $request->state,
                'city'              => $request->city,
                'zip_code'          => $request->zip_code,
                'phone'             => $request->phone,
                'fax'               => $request->fax,
                'updated_at'        => now(),
            ];
           $shipping->update($data);

           Session::flash('warning','Shipping address Updated succeeded!');
           return redirect('customer/shipping');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerShippingAddress $shipping)
    {
        $shipping->delete();

        Session::flash('danger','Shipping address Deleted');

        return back();
    }

    private function validateForm($request){
        $validatedData = $request->validate([
            'location'  => 'required',
            'address'   => 'required',
            'country'   => 'required',
            'state'     => 'required',
            'city'      => 'required',
            'zip_code'  => 'required',
            'phone'     => 'required',
        ]);
    }
}
