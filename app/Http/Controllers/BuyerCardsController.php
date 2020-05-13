<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use Illuminate\Http\Request; 
use App\Models\BuyerCard; 
use Sentinel;
use Session;

class BuyerCardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $card = BuyerCard::where('user_id',Sentinel::getUser()->id)->get();
        return view('frontend.byer_cards.index',compact('card'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $buyerCard = BuyerCard::where('user_id',Sentinel::getUser()->id)->first();
        //dd($buyerCard);
        return view('frontend.byer_cards.create');
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
        if($buyerId){
            $data = [
            'card_number' => $request->card_number,
            'card_holder_name' => $request->card_holder_name,
            'card_expire_date' => $request->card_expire_date,
            'card_cvc' => $request->card_cvc,
            'buyer_id' => $buyerId->id,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
            ];

            BuyerCard::create($data);

            Session::flash('success', 'Billing Card created');

            return redirect('profile/card');
        }
        Session::flash('danger', 'Somthing want wrong please fill up the form correctly');
        return redirect('profile/card');
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
    public function edit(BuyerCard $card)
    {
        return view('frontend.byer_cards.edit',compact('card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuyerCard $card)
    {
        $this->validateForm($request);  
            $data = [
            'card_number' => $request->card_number,
            'card_holder_name' => $request->card_holder_name,
            'card_expire_date' => $request->card_expire_date,
            'card_cvc' => $request->card_cvc, 
            'user_id' => Sentinel::getUser()->id,
            'updated_at' => now(),
            ];

            $card->update($data);

            Session::flash('success', 'Billing Card updated');

            return redirect('profile/card');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuyerCard $card)
    {
        $card->delete();

        Session::flash('success', 'Billing Card Deleted');

        return back();
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
