<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentTrans;
use App\Models\Cart;
use App\Models\Orderitem;
use App\Models\Order;
use App\Mail\OrderConformationMail;
use Sentinel;
class PaymentTransController extends Controller
{
    public function index(){ 
        $transation = PaymentTrans::where('user_id',Sentinel::getUser()->id)->get(); 
        
        return view('frontend.paymenttransaction.index',compact('transation'));
    }
    public function store(Request $request){
        // die('asdf');
        // echo 'sssssssss';
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
            'order_invoice'     => $request->order_invoice,
            'user_id'           => Sentinel::getUser()->id,
        ];
        PaymentTrans::create($payment);

        // $carts = Cart::where('user_id',Sentinel::getUser()->id)->get()->toArray();
        // $order = Order::where('invoice',$request->invoice)->first();
        // echo $request->order_invoice;
        // // dd($order);
        // $subTotal = 0;
        // foreach($carts as $item){
        //     $subTotal += $item['qty'] * $item['price'];
        //     $item['order_id']   = $order->id;
        //     // dd($item);
        //     Orderitem::create($item);
        // }
        // $order->update([
        //         'sub_total'         => $subTotal, 
        //         'total'             => $subTotal, 
        //         'pay_amount'        => $payment['paid_amount'],
        //         'payment_status'    => 'complete'
        //     ]);
        // Cart::where('user_id',Sentinel::getUser()->id)->delete();
        
        // return response()->json(['status' => $status]);




        $carts = Cart::where('user_id',Sentinel::getUser()->id)->get()->toArray();
        // dd($carts);
        $userId = Sentinel::getUser();
        $subTotal = 0;
        $order = Order::where('invoice', $request->order_invoice)->first();
        // dd($order);
        foreach($carts as $item){
            $subTotal += $item['qty'] * $item['price'];
            $item['order_id']   = $order->id;
            Orderitem::create($item);
            Cart::where('id',$item['id'])->delete();
        }
        $ordersId = $order->update([
                'sub_total'         => $subTotal, 
                'total'             => $subTotal, 
                'pay_amount'        => 0,
                'payment_status'    => 'Pending',
                'order_status'    => 'confirm'
            ]);
        session()->forget('invoice');

        

        //Send Mail Here...

        $subtotal = $order['sub_total'];
        $total    = $order['total'];

        

        \Mail::to($userId['email'])->send(new OrderConformationMail($userId,$subtotal,$total,$order));

        echo "OK";
    }
}
