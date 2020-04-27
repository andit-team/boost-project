<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer;
use Illuminate\Support\Facades\Auth;
use Sentinel;
use App\User;

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
    public function create()
    {
        $buyerProfile = Buyer::where('user_id',Sentinel::getUser()->id)->first();
        //dd($buyerProfile);
        return view('admin.buyers.create',compact('buyerProfile'));
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
        $this->validateForm($request);
//        $buyerprofile = Buyer::updateOrCreate(['user_id'=>$buyerId->user_id],[
//            'full_name' => $request->full_name,
//            'phone_number' => $request->phone_number,
//            'dob'  =>$request->dob,
//            'gender' => $request->gender,
//            'description' => $request->description,
//            'last_visited_at' => $request->last_visited_at,
//            'last_visited_from' => $request->last_visited_from,
//            'verification_token' => $request->verification_token,
//            'remember_token' => $request->remember_token,
//            'user_id' => Sentinel::getUser()->id,
//            'created_at' => now(),
//        ]);
        if($buyerId){
            $buyerId->update([
                'full_name' => $request->full_name,
                'phone_number' => $request->phone_number,
                'dob'  =>$request->dob,
                'gender' => $request->gender,
                'description' => $request->description,
                'last_visited_at' => $request->last_visited_at,
                'last_visited_from' => $request->last_visited_from,
                'verification_token' => $request->verification_token,
                'remember_token' => $request->remember_token,
                'user_id' => Sentinel::getUser()->id,
                'created_at' => now(),
            ]);
        }else{
            $buyerId=Buyer::create([
                'full_name' => $request->full_name,
                'phone_number' => $request->phone_number,
                'dob'  =>$request->dob,
                'gender' => $request->gender,
                'description' => $request->description,
                'last_visited_at' => $request->last_visited_at,
                'last_visited_from' => $request->last_visited_from,
                'verification_token' => $request->verification_token,
                'remember_token' => $request->remember_token,
                'user_id' => Sentinel::getUser()->id,
                'created_at' => now(),
            ]);
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
            'full_name' => 'required',
//            'dob' => 'required',
//            'gender' => 'required',
//            'description' => 'required',
        ]);
    }
}
