<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuyerBillingAddress;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Sentinel;
use Session;

class BuyerBillingAddressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $billing = BuyerBillingAddress::where('user_id',Sentinel::getUser()->id)->get();
        return view('frontend.buyer_billing_address.index',compact('billing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.buyer_billing_address.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buyerId = Customer::where('user_id',Sentinel::getUser()->id)->first();
        //dd($buyerId);
        $this->validateForm($request);
        if($buyerId){
            $data = [
                'location'      => $request->location,
                'address'       => $request->address,
                'country'       => $request->country,
                'state'         => $request->state,
                'city'          => $request->city,
                'zip_code'      => $request->zip_code,
                'phone'         => $request->phone,
                'fax'           => $request->fax,
                'buyer_id'      =>  $buyerId->id,
                'user_id'       => Sentinel::getUser()->id,
                'created_at'    => now(),
            ];

            BuyerBillingAddress::create($data);

            Session::flash('success', 'Billing Address created');

            return redirect('profile/billing');
         }

        Session::flash('danger', 'please create profile correctly');

        return redirect('profile/billing');



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
    public function edit(BuyerBillingAddress $billing)
    {
        //dd($billing);
        return view('frontend.buyer_billing_address.edit',compact('billing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuyerBillingAddress $billing)
    {
        $this->validateForm($request);

            $data = [
                'location'      => $request->location,
                'address'       => $request->address,
                'country'       => $request->country,
                'state'         => $request->state,
                'city'          => $request->city,
                'zip_code'      => $request->zip_code,
                'phone'         => $request->phone,
                'fax'           => $request->fax,
                'user_id'       => Sentinel::getUser()->id,
                'updated_at'    => now(),
            ];

            $billing->update($data);

            Session::flash('success', 'Billing Address Updated');

            return redirect('profile/billing');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuyerBillingAddress $billing)
    {
        $billing->delete();

        Session::flash('warning', 'Billing Address Deleted');

        return back();
    }

    private function validateForm($request){
        $validatedData = $request->validate([
            'location'      => 'required',
            'address'       => 'required',
            'country'       => 'required',
            'state'         => 'required',
            'city'          => 'required',
            'zip_code'      => 'required',
            'phone'         => 'required',
        ]);
    }
}
