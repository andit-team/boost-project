<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromotionUse extends Model
{
    protected $fillable = ['title','amount','description','active','buyer_id','promotion_id','order_id','user_id'];

    public function user(){
     return $this->belongsTo(HrmEmployee::class,'user_id');

    public function buyer(){
      return $this->belongsTo(HrmEmployee::class,'buyer_id');

    public function order(){
     return $this->belongsTo(HrmEmployee::class,'order_id');

    public function promotion(){
      return $this->belongsTo(HrmEmployee::class,'promotion_id');
}
