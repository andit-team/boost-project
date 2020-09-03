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
use App\Models\Orderitem;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $order = Order::all();
        // dd($order); 
       return view('admin.order.index',compact('order'));
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
    public function show($id)
    {
        $order = Order::find($id);
        $cartProduct = Cart::where('user_id',$order->user_id)->get();
        $totlaPrice = Cart::where('user_id',$order->user_id)->sum('price');
        
        return view('admin.order.show',compact('cartProduct','totlaPrice','order'));
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
        // if($edit != 'edit'){
        //     Sentinel::logout(null, true);
        // }
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
        if($cartProduct != 0 ){
            if(session()->has('invoice')){
                return redirect('orders/edit/select-delivery');
            }
            return view('frontend.order.select-delivery');
        }
        return redirect()->back();
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
        if (Sentinel::check()){
            return redirect('orders/edit/information');
        }else{
            return redirect('login');
        }
    }

    public function information(){
        if(session()->has('invoice')){
            if (Sentinel::check()){
                return redirect('orders/edit/information');
            }
            return view('frontend.order.information');
        }
        return redirect()->back();
    }

    public function EditInformation(){
        if (!Sentinel::check()) {
            return redirect()->back();
        }
        $user = Sentinel::getUser();
        // dd($user);
        $returnUrl = session('_previous')['url'];
        return view('frontend.order.edit.information',compact('user','returnUrl'));
    }

    public function UpdateInformation(Request $request){
        $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required|email',
            'postcode'      => 'required',
            'address_1'     => 'required',
            'town'          => 'required',
            'account'       => 'required',
        ]);
        $data = [
		    'first_name'=> $request->first_name,
            'last_name' => $request->last_name,
            'com_name' => $request->com_name,
            'com_phone' => $request->com_phone,
            'com_address' => $request->com_address,
            'com_vat' => $request->com_vat,
            'or_name' => $request->or_name,
            'or_phone' => $request->or_phone,
            'or_address' => $request->or_address,
            'account' => $request->account,
            'or_reg' => $request->or_reg, 
            'file_1'=> Boost::pdfUpload($request,'file_1','old_file_1','/uploads/customer_profile'), 
            'file_2' => Boost::pdfUpload($request,'file_2','old_file_2','/uploads/customer_profile'),
            'address_1' => $request->address_1,
            'address_2' => $request->address_2,
            'postcode' => $request->postcode,
            'town'      => $request->town,
		    'email' 	=> $request->email,
		    'type' 	    => $request->account,
        ];
        $user = Sentinel::getUser();
        $user->update($data);
        return redirect($request->back);
    }

    public function payment(){
        if (Sentinel::check()) {
            if(Sentinel::getUser()->card){
                return redirect('orders/edit/payment-deatils');
            }
            return view('frontend.order.payments-deatils');
        }
        return redirect()->back();
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

    public function EditPayment(){
        if (!Sentinel::check()) {
            return redirect()->back();
        }
        if ($card = Sentinel::getUser()->card) {
            // dd($card);
            $returnUrl = session('_previous')['url'];
            return view('frontend.order.edit.payments-deatils',compact('card','returnUrl'));
        }
        return redirect()->back();
    }

    public function UpdatePayment(Request $request){
        $card = PaymentCard::where('id',$request->card_id)->where('user_id',Sentinel::getUser()->id)->first();
        if(!$card){
            return redirect()->back(); 
        }
        $request->validate([
            'postCode'          => 'required',
            'address1'          => 'required',
            'town'              => 'required',
            'aggredTc'          => 'required',
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
            'updated_at'        => now()
        ];
        $card->update($data);
        return redirect('orders/overview');
    }


    public function overview(){
        if (!Sentinel::check()) {
            return redirect()->back();
        }
        if(!Sentinel::getUser()->card){
            return redirect()->back();
        }
        $carts = Cart::with('product')->where('user_id',Sentinel::getUser()->id)->get();
        $order = Order::where('invoice',session('invoice'))->first();
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

    public function orderConfirm(Request $request){
        $carts = Cart::where('user_id',Sentinel::getUser()->id)->get()->toArray();
        $subTotal = 0;
        $order = Order::where('invoice', session('invoice'))->first();
        foreach($carts as $item){
            $subTotal += $item['qty'] * $item['price'];
            $item['order_id']   = $order->id;
            Orderitem::create($item);
        }
        $order->update([
                'sub_total'         => $subTotal, 
                'total'             => $subTotal, 
                'pay_amount'        => 0,
                'payment_status'    => 'Pending'
            ]);
        Cart::where('user_id',Sentinel::getUser()->id)->delete();
        session()->forget('invoice');

        //Send Mail Here...

        Session::flash('success','Your order has been successfully created!');
        return redirect('dashboard');

    }
}
