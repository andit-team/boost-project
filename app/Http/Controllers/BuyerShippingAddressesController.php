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
        Session::flash('warning', 'Succesasdfklh asdfl');
        $buyerShippingAddress = BuyerShippingAddress::where('user_id',Sentinel::getUser()->id)->first();
        return view('frontend.buyer_shipping_addresses.index',compact('buyerShippingAddress'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $buyerShippingAddress = BuyerShippingAddress::where('user_id',Sentinel::getUser()->id)->first();
        //$buyerShippingAddress = BuyerShippingAddress::where('user_id',Sentinel::getUser()->id)->first();
        return view('frontend.buyer_shipping_addresses.create');
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
        // dd( $buyerId);
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
                 'buyer_id'      => $buyerId->id,
                'user_id'       => Sentinel::getUser()->id,
                'created_at'    => now(),
            ];
                 
            BuyerShippingAddress::create($data);
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
