<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuyerBillingAddress;
use App\Models\Buyer;
use Illuminate\Support\Facades\Auth;
use Sentinel;

class BuyerBillingAddressesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.buyer_billing_address.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $buyerAddress = BuyerBillingAddress::where('user_id',Sentinel::getUser()->id)->first();
        return view('frontend.buyer_billing_address.create',compact('buyerAddress'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buyerId = Buyer::where('user_id',Sentinel::getUser()->id)->first();
        //dd($buyerId);
        $this->validateForm($request);
        $buyerBillingaddress = BuyerBillingAddress::updateOrCreate(['buyer_id' =>$buyerId->id],[
            'location' => $request->location,
            'address' => $request->address,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'phone' => $request->phone,
            'fax' => $request->fax,
            'buyer_id' =>  $buyerId->id,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
        ]);

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
            'location'=> 'required',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zip_code'=> 'required',
            'phone' => 'required',
        ]);
    }
}
