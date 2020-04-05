<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = ['title','description','is_permanent','valid_from','valid_to','has_coupon_code','coupon_code','multiple_use','priority','active','promotion_head_id','user_id'];
}
