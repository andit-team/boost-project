<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['rate','qty','active','buyer_id','shop_id','item_id','color_id','size_id','user_id'];
}
