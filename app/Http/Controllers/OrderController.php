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
use App\Models\Date;

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
        // session()->flush();
        // session()->forget('carts');
        $product = Product::all();
        $cartProduct = Order::with('product')->get();  
        // session(['key' => 'valuasdfasdfe']);
        return view('frontend.order.essential',compact('product','cartProduct'));

    }

    public function addCart(Request $request){
        dd(session('carts'));
        $key = '';
        if(session()->has('carts')) {
            $key = array_search($request->product, array_column(session('carts'), 'product_id'));
            echo $key;
            if(session('carts')[$key]){
                echo 'dd';
                $cart = session('carts')[$key];
                dd($cart);
            }
        }
        dd($key);
        $product = Product::find($request->product);
        if($product){
            $carts = [
                'product_id'=> $product->id,
                'image'     => $product->product_image,
                'price'     => $product->price,
                'qty'       => 1,
            ];
        }
        // dd($carts);
        Session::push('carts', $carts);
        // session(['Carts'=>$carts]);
        
        
        // dd($carts);

        // if($order){
        //     $orderupdate = [
        //         'qty' => $order->qty+1,
        //         'updated_at' => now(),
        //     ];
        //     $orderincrise = $order->update($orderupdate);
        //     echo json_encode($orderincrise );
        // }else{
        //     $data = [
        //         'product_id' => $request->product,
        //         'created_at' => now(),
        //     ];
        //    $orderadd = Order::create($data);
        //    echo json_encode($orderadd);
        // }
    }

    public function selectDelivery(){
        return view('frontend.order.select-delivery');
    }

    public function dateFrequency(Request $request){
        dd($request->all());
        $data = [
            'preferred_date' => $request->preferred_date,
            'frequency' => $request->frequency,
            'created_at' => now(),
        ];
        $orderfequency = Date::create($data);

        echo json_encode($orderfequency);
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

    public function orderDecreas(Request $request){
        // dd($request->all());
        $order = Order::where('product_id',$request->productDecreas)->first(); 
        if($order){
            $orderdecrese = [
                'qty' => $order->qty-1,
                'updated_at' => now(),
            ];
            $orderminus= $order->update($orderdecrese);
            // dd($orderminus);
            return response()->json(['status'=>'OK']);
            // echo json_encode($orderminus);
        }
    } 


    public function orderRemove(Request $request){
        // dd($request->all());
        $order = Order::where('product_id',$request->productdelete)->first(); 
        if($order){
            
            $orderremove = $order->delete();
            return response()->json(['status'=>'OK']);
            // echo json_encode($orderremove );
        }
    }
}
