<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
      protected $fillable = ['qty','rate','amount','active','order_id','shop_id','item_id','color_id','size_id','user_id'];
}
