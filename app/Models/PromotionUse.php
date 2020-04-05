<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromotionUse extends Model
{
    protected $fillable = ['title','amount','description','active','buyer_id','promotion_id','order_id','user_id'];
}
