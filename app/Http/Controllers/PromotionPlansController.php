<?php

namespace App\Http\Controllers;

use App\Models\PromotionPlan;
use App\Models\Promotion;
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
      $promotion = Promotion::all();
      $promotionplan = PromotionPlan::all();
      return view('admin.promotions.index',compact('promotion','promotionplan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $promotionplan = PromotionPlan::all();
      return view('admin.promotions.create',compact('promotionplan'));
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
         return redirect('andbaazaradmin/promotionplan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Promotionplan $promotionplan)
    {
      return  view('admin.promotions.show',compact('promotion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotionplan $promotionplan)
    {
        $promotion = PromotionPlan::all();
      return view('admin.promotions.edit',compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Promotionplan $promotionplan,Request $request)
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
      $promotionplan->update($data);

     return redirect('andbaazaradmin/promotionplan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotionplan $promotionplan)
    {
      $promotionplan->delete();

      return redirect('andbaazaradmin/promotionplan');
    }

    private function validateForm($request){
        $validatedData = $request->validate([
            'from_price' => 'required',
            'to_price' => 'required',
            'amount' => 'required',            
            'promotion_id' => 'required',
        ]);
    }
}
