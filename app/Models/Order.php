<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\User;

class Order extends Model
{
    protected $fillable = ['user_id','invoice','delivery_date','delivery_frequency','sub_total','discount','total','pay_amount','paypal_id','payment_status','order_status'];

    // public function product(){
    //     return $this->belongsTo(Product::class,'product_id');
    // }
}