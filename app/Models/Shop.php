<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Shop;
use App\Models\Seller;
use App\Models\OrderItem;
use App\User;

class Shop extends Model
{
  protected $fillable = ['name','slug','cell_phone','google_location','featured','email','web','description','active','seller_id','user_id'];

  public function user(){
   return $this->belongsTo(User::class,'user_id');
    }
  public function seller(){
    return $this->belongsTo(Seller::class,'seller_id');
  }
  public function cart(){
    return $this->hasMany(Cart::class,'shop_id');
 }
 public function orderitem(){
   return $this->hasMany(OrderItem::class,'shop_id');
 }
}
