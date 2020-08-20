<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\user; 
use Session;
use Boost;
use Sentinel;
use App\Models\Product; 
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function ordernow(){
        $product = Product::all();
        return view('frontend.order.essential',compact('product'));
    }

    public function addCart(Request $request){
        $order = Order::where('product_id',$request->product)->first(); 
        if($order){
            $orderupdate = [
                'qty' => $order->qty+1,
                'updated_at' => now(),
            ];
            $orderincrise = $order->update($orderupdate);
            echo json_encode($orderincrise );
        }else{
            $data = [
                'product_id' => $request->product,
                'created_at' => now(),
            ];
            
           $orderadd = Order::create($data);

           echo json_encode($orderadd);
        }
            
       

    }

    public function selectDelivery(){
        return view('frontend.order.select-delivery');
    }

    public function information(){
        return view('frontend.order.information');
    }

    public function payment(){
        return view('frontend.order.payments-deatils');
    }

    public function overview(){
        return view('frontend.order.overview');
    }
}