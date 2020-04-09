<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PaymentMethod;
use App\Models\Order;
use App\User;

class BuyerPayment extends Model
{
      protected $fillable = ['authorize_info','payment_token','payer_info','amount','active','order_id','payment_method_id','user_id'];

      public function user(){
         return $this->belongsTo(User::class,'user_id');

       public function order(){
        return $this->belongsTo(User::class,'order_id');

       public function paymentmethod(){
        return $this->belongsTo(PaymentMethod::class,'payment_method_id');
}
