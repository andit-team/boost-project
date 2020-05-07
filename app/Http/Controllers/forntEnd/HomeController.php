<?php

namespace App\Http\Controllers\forntEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\ItemImage;
use Sentinel;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Item::all();
        // return view('welcome');
         return view('welcome',compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function details($id)
    // {
    //     $item = Item::all();
    //     $product_details = Item::where('id', $item->id)->first();      
    // //    dd( $product_details);
    //      return view('frontend.product.details',compact('product_details','item'));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {      
          $item= Item::find($id);
        //$product_details = Item::where('slug',$product_details->slug)->first();      
    //    dd( $product_details);
         return view('frontend.product.details',compact('product_details','item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('frontend.product.cart');
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

    public function cart()
    {
        return view('frontend.product.cart');
    }
}
