<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request;
use App\Models\BuyerCard;
use PHPUnit\Framework\StaticAnalysis\HappyPath\AssertNotInstanceOf\B;
use Sentinel;

class BuyerCardsController extends Controller
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
        $buyerCard = BuyerCard::where('user_id',Sentinel::getUser()->id)->first();
        //dd($buyerCard);
        return view('admin.byer_cards.create',compact('buyerCard'));
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
        $buyerCard = BuyerCard::updateOrCreate(['buyer_id'=>$buyerId->id],[
            'card_number' => $request->card_number,
            'card_holder_name' => $request->card_holder_name,
            'card_expire_date' => $request->card_expire_date,
            'card_cvc' => $request->card_cvc,
            'buyer_id' => $buyerId->id,
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
            'card_number' => 'required',
            'card_holder_name' => 'required',
            'card_expire_date' => 'required',
            'card_cvc' => 'required'
        ]);
    }
}
