<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
      protected $fillable = ['qty','rate','amount','active','order_id','shop_id','item_id','color_id','size_id','user_id'];

      public function user(){
       return $this->belongsTo(HrmEmployee::class,'user_id');

      public function order(){
        return $this->belongsTo(HrmEmployee::class,'order_id');

      public function shop(){
       return $this->belongsTo(HrmEmployee::class,'shop_id');

      public function item(){
        return $this->belongsTo(HrmEmployee::class,'item_id');

      public function color(){
       return $this->belongsTo(HrmEmployee::class,'color_id');

      public function size(){
        return $this->belongsTo(HrmEmployee::class,'size_id');
}
