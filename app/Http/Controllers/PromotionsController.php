<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;
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
        $this->validateForm($request);
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'is_permanent' => $request->is_permanent,
            'valid_from' => $request->valid_from,
            'valid_to' => $request->valid_to,
            'has_coupon_code' => $request->has_coupon_code,
            'coupon_code' => $request->coupon_code,
            'multiple_use' => $request->multiple_use,
            'priority' => $request->priority,
            'promotion_head_id' => $request->promotion_head_id,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
        ];

        Promotion::create($data);
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
      $category->delete();

      return redirect('andbaazaradmin/category');
    }

    private function validateForm($request){
        $validatedData = $request->validate([
            'title' => 'required',
            'is_permanent' => 'required',
            'valid_from' => 'required',
            'valid_to' => 'required',
            'coupon_code' => 'required'
        ]);
    }
}
