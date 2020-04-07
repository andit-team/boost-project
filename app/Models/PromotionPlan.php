<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromotionPlan extends Model
{
    protected $fillable = ['from_price','to_price','amount','is_free_shipping','active','promotion_id','user_id'];

    public function user(){
     return $this->belongsTo(HrmEmployee::class,'user_id');

    public function promotion(){
      return $this->belongsTo(HrmEmployee::class,'promotion_id');
}
