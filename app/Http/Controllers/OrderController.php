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
use App\Models\Cart;

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

    private function getSessionUser(){
        if (Sentinel::check()){ 
            return Sentinel::getUser()->id;
        }else{
            if(session()->has('user_id')){
              return session('user_id');
            }else{
                $userId = Boost::randString();
                session(['user_id' => $userId]);
                return $userId;
            }
        }
    }
    public function ordernow(){
        // dd(session()->all());
        // dd(Session::getId());
        $userId = $this->getSessionUser();
        $product = Product::all();
        $cartProduct = Cart::with('product')->where('user_id',$userId)->get();  
        // dd($cartProduct);
        return view('frontend.order.essential',compact('product','cartProduct'));
    }

    public function addCart(Request $request){
        // dd(session()->all());
        // dd($request->all());
        $userId = $this->getSessionUser();
        $product = Product::find($request->product);
        if($product){
            $cart = Cart::where('product_id',$request->product)->where('user_id',$userId)->first();  
            if($cart){
                $cartupdate = [
                    'qty' => $cart->qty+1,
                    'updated_at' => now(),
                ];
                $cartincrise = $cart->update($cartupdate);
                echo json_encode($cartincrise);
            }else{
                $data = [
                    'product_id'    => $request->product,
                    'user_id'       => $userId,
                    'price'         => $product->price,
                    'created_at'    => now(),
                ];
                
            $cartadd = Cart::create($data);
            echo json_encode($cartadd);
            }
        }
    }

    public function selectDelivery(){
        return view('frontend.order.select-delivery');
    }

    public function dateFrequency(Request $request){
        $userId = $this->getSessionUser();
        $data = [
            'invoice'           => Boost::randString(8),
            'delivery_date'     => $request->delevaryDate,
            'delivery_frequency'=> $request->frequency,
            'user_id'           => $userId,
            'created_at' => now(),
        ];
        // dd($data);
        $orderfequency = Order::create($data);
        return redirect('orders/information');
    }

    public function information(){
        return view('frontend.order.information');
    }

    public function payment(){
        // dd(Sentinel::getUser());
        return view('frontend.order.payments-deatils');
    }

    public function overview(){
        $userId = session('user_id');
        $carts = Cart::with('product')->where('user_id',$userId)->get();
        $order = Order::where('user_id',$userId)->first();
        // dd(Sentinel::getUser()); 
        return view('frontend.order.overview',compact('carts','order'));
    }

    public function orderDecreas(Request $request){
        // dd($request->all());
        $userId = $this->getSessionUser();
        $order = Cart::where('product_id',$request->productDecreas)->where('user_id',$userId)->first(); 
        if($order){
            $orderdecrese = [
                'qty' => $order->qty-1,
                'updated_at' => now(),
            ];
            $orderminus= $order->update($orderdecrese);
            return response()->json(['status'=>'OK']);
        }
    } 


    public function orderRemove(Request $request){
        $userId = $this->getSessionUser();
        $order = Cart::where('product_id',$request->productdelete)->where('user_id',$userId)->first(); 
        if($order){
            $orderremove = $order->delete();
            return response()->json(['status'=>'OK']);
            // echo json_encode($orderremove );
        }
    }
}
