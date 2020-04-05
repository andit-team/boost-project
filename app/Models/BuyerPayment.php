<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuyerPayment extends Model
{
      protected $fillable = ['authorize_info','payment_token','payer_info','amount','active','order_id','payment_method_id','user_id'];
}
