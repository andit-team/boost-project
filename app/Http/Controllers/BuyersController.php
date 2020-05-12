<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;
use Illuminate\Support\Facades\Auth;
use Sentinel;
use App\User;
use Baazar;

class BuyersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $prorile = Sentinel::getUser();
        return view('frontend.buyers.create',compact('prorile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $buyerId = Buyer::where('user_id',Sentinel::getUser()->id)->first();
        $this->validateForm($request);
        if($buyerId){
            $buyerId->update([
                'full_name'             => $request->first_name.' '.$request->last_name,
                'phone_number'          => $request->phone_number,
                'picture'               => Baazar::fileUpload($request,'picture','old_image','/uploads/buyer_profile'),
                'dob'                   => $request->dob,
                'gender'                => $request->gender,
                'description'           => $request->description,
                'updated_at'            => now(),
            ]);
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
            'full_name'     => 'required',
//            'dob'         => 'required',
//            'gender'      => 'required',
//            'description' => 'required',
        ]);
    }
}
