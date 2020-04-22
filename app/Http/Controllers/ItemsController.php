<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Sentinel;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view ('admin.product.create');
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
            'name' => $request->name,
            'slug' => $request->slug,
            'price' => $request->price,
            'model_no' => $request->model_no,
            'org_price' => $request->org_price,
            'pack_id' => $request->pack_id,
            'sorting' => $request->sorting,
            'description' => $request->description,
            'min_order' => $request->min_order,
            'available_on' => $request->available_on,
            'availability' => $request->availability,
            'made_in' => $request->made_in,
            'materials' => $request->materials,
            'labeled' => $request->labeled,
            'video_url' => $request->video_url,
            'total_sale_amount' => $request->total_sale_amount,
            'total_order_qty' => $request->total_order_qty,
            'last_ordered_at' => $request->last_ordered_at,
            'last_carted_at' => $request->last_carted_at,
            'total_view' => $request->total_view,
            'activated_at' => $request->activated_at,
            'user_id' => Sentinel::getUser()->id,
            'created_at' => now(),
        ];

        Item::create($data);
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
            'name' => 'required',
            'price' => 'required',
            'model_no' => 'required',
            'org_price' => 'required',
            'pack_id' => 'required',
            'min_order'=> 'required',
            'made_in' => 'required',
            'materials'=> 'required',
            'labeled' => 'required',
            'available_on' => 'required',
            'availability' => 'required',
            'activated_at' => 'required',


        ]);
    }
}
