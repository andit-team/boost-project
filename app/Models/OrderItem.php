<?php

namespace App\Models;
use App\Models\Order;
use App\Models\Shop;
use App\Models\Product;
use App\Models\Color;
use App\Models\Size;
use App\User;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
      protected $fillable = ['qty','rate','amount','active','order_id','shop_id','item_id','color_id','size_id','user_id'];

      public function user(){
       return $this->belongsTo(User::class,'user_id');

      public function order(){
        return $this->belongsTo(Order::class,'order_id');

      public function shop(){
       return $this->belongsTo(Shop::class,'shop_id');

      public function item(){
        return $this->belongsTo(Product::class,'item_id');

      public function color(){
       return $this->belongsTo(Color::class,'color_id');

      public function size(){
        return $this->belongsTo(Size::class,'size_id');
}
