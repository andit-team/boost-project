<?php

namespace App\Http\Controllers;

use App\Models\PromotionPlan;
use Illuminate\Http\Request;

class PromotionPlansController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            'from_price' => $request->from_price,
            'to_price' => $request->to_price,
            'amount' => $request->amount,
            'is_free_shipping' => $request->is_free_shipping,
            'promotion_id' => $request->promotion_id,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
        ];

        PromotionPlan::create($data);
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
            'from_price' => 'required',
            'to_price' => 'required',
            'amount' => 'required',
            'is_free_shipping' => 'required',
            'promotion_id' => 'required',
        ]);
    }
}
