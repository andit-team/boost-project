<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentTrans extends Model
{
    protected $fillable = ['date','transaction_id','payer_id','payer_name','payer_email','paid_amount','order_amount','order_invoice','user_id'];
    
}
