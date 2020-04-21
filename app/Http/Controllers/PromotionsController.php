<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;
use App\Models\PromotionHead;
use Sentinel;

class PromotionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $promotion = Promotion::all();
      $promotionhead = PromotionHead::all();
      return view('admin.promotions.index',compact('promotion','promotionhead'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $promotionhead = PromotionHead::all();
        return view('admin.promotions.create',compact('promotionhead'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateForm($request);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'valid_from' => $request->valid_from,
            'valid_to' => $request->valid_to,
            'coupon_code' => $request->coupon_code,
            'promotion_head_id' => $request->promotion_head_id,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
        ];
        Promotion::create($data);

         return redirect('andbaazaradmin/promotion');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Promotion $promotion)
    {
       return  view('admin.promotions.show',compact('promotion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Promotion $promotion)
    {
        $promotionhead = PromotionHead::all();
        return view('admin.promotions.edit',compact('promotion','promotionhead'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Promotion $promotion,Request $request)
    {
      $data = [
          'title' => $request->title,
          'description' => $request->description,
          'valid_from' => $request->valid_from,
          'valid_to' => $request->valid_to,
          'coupon_code' => $request->coupon_code,
          'promotion_head_id' => $request->promotion_head_id,
          'user_id' => Sentinel::getUser()->id,
          'created_at' => now(),
      ];

      $promotion->update($data);

     return redirect('andbaazaradmin/promotion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promotion $promotion)
    {
      $promotion->delete();

      return redirect('andbaazaradmin/promotion');
    }

    private function validateForm($request){
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'valid_from' => 'required',
            'valid_to' => 'required',
            'coupon_code' => 'required'
        ]);
    }
}
