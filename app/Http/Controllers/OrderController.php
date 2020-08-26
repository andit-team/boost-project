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
use App\Models\PaymentCard;

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
    public function ordernow($edit = Null){
        // dd(session()->all());
        // dd(Session::getId());
        if($edit != 'edit'){
            Sentinel::logout(null, true);
        }
        $userId = $this->getSessionUser();
        $product = Product::all();
        $cartProduct = Cart::with('product')->where('user_id',$userId)->get();
        // dd($cartProduct);
        return view('frontend.order.essential',compact('product','cartProduct','edit'));
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
        $userId = $this->getSessionUser();
        $cartProduct = Cart::where('user_id',$userId)->count();
        if($cartProduct == 0 ){
            return redirect()->back();
        }
        return view('frontend.order.select-delivery');
    }
    public function EditDelivery(){
        $order = Order::where('invoice',session('invoice'))->first();
        if(!$order){return redirect()->back();}
        $returnUrl = session('_previous')['url'];
        return view('frontend.order.edit.select-delivery',compact('order','returnUrl'));
    }

    public function UpdateDelivery(Request $request){
        // dd($request->all());
        $order = Order::where('invoice',session('invoice'))->first();
        if(!$order){return redirect()->back();}
        $order->update([
            'delivery_date'     => $request->delevaryDate,
            'delivery_frequency'=> $request->frequency,
        ]);
        return redirect($request->back);
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
        $order = Order::create($data);
        session(['invoice' => $order->invoice]);
        return redirect('orders/information');
    }

    public function information(){
        if(session()->has('invoice')){
            return view('frontend.order.information');
        }
        return redirect()->back();
    }

    public function payment(){
        if (!Sentinel::check()) {
            return redirect()->back();
        }
        return view('frontend.order.payments-deatils');
    }

    public function paymentCardSave(Request $request){
        // dd($request->all());
        $request->validate([
            // 'name'              => 'required',
            // 'card_number'       => 'required',
            // 'mmyy'              => 'required',
            // 'cc'                => 'required|numeric',
            'postCode'          => 'required',
            'address1'          => 'required',
            // 'address2'          => 'required',
            'town'              => 'required',
            // 'subcription'       => 'required',
            'aggredTc'          => 'required',
            // 'sameAsShipping'    => 'required',
        ]);
        $data = [
            'type'              => $request->type,
            'name'              => $request->name,
            'card_number'       => $request->card_number,
            'mmyy'              => $request->mmyy,
            'cc'                => $request->cc,
            'postCode'          => $request->postCode,
            'address1'          => $request->address1,
            'address2'          => $request->address2,
            'town'              => $request->town,
            'subcription'       => $request->subcription,
            'aggredTc'          => $request->aggredTc,
            'sameAsShipping'    => $request->sameAsShipping,
            'user_id'           => Sentinel::getUser()->id,
            'created_at'        => now()
        ];
        PaymentCard::create($data);
        // session()->flash('success','Payment information added success');
        Session::flash('success','Payment information added success');
        return redirect('orders/overview');
    }

    public function overview(){
        if(!Sentinel::getUser()->card){
            return redirect()->back();
        }
        $carts = Cart::with('product')->where('user_id',Sentinel::getUser()->id)->get();
        $order = Order::where('user_id',Sentinel::getUser()->id)->OrderBy('id','DESC')->first();
        // dd($order);
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
