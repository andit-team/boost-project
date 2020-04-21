<?php

namespace App\Http\Controllers;

use App\Models\PromotionPlan;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Sentinel;
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
      return view('admin.promotion_plan.index',compact('promotion','promotionplan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $promotion = Promotion::all();
      return view('admin.promotion_plan.create',compact('promotion'));
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
      return  view('admin.promotion_plan.show',compact('promotionplan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotionplan $promotionplan)
    {
      $promotion = Promotion::all();
      return view('admin.promotion_plan.edit',compact('promotion','promotionplan'));
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
