<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentTrans;
use App\Models\Cart;
use App\Models\Orderitem;
use App\Models\Order;
use Sentinel;
class PaymentTransController extends Controller
{
    public function index(){ 
        $transation = PaymentTrans::where('user_id',Sentinel::getUser()->id)->get(); 
        
        return view('frontend.paymenttransaction.index',compact('transation'));
    }
    public function store(Request $request){
        // dd($request->all());
        $data = $request->data;
        $payment = [
            'date'              => date('Y-m-d'),
            'transaction_id'    => $data['id'],
            'payer_id'          => $data['payer']['payer_id'],
            'payer_name'        => $data['payer']['name']['given_name'].' '.$data['payer']['name']['surname'],
            'payer_email'       => $data['payer']['email_address'],
            'paid_amount'       => $data['purchase_units'][0]['amount']['value'],
            'order_amount'      => $request->order_amount,
            'order_invoice'          => $request->order_invoice,
            'user_id'           => Sentinel::getUser()->id,
        ];
        PaymentTrans::create($payment);
        $carts = Cart::where('user_id',Sentinel::getUser()->id)->get()->toArray();
        $order = Order::where('invoice',$request->invoice)->first();
        $subTotal = 0;
        foreach($carts as $item){
            $subTotal += $item['qty'] * $item['price'];
            $item['order_id']   = $order->id;
            Orderitem::create($item);
        }
        $order->update([
                'sub_total'         => $subTotal, 
                'total'             => $subTotal, 
                'pay_amount'        => $payment['paid_amount'],
                'payment_status'    => 'complete'
            ]);
        Cart::where('user_id',Sentinel::getUser()->id)->delete();
        echo "OK";
        // return response()->json(['status' => $status]);
    }
}
