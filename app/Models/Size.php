<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\Inventory;
use App\Models\OrderItem;
use App\User;

class Size extends Model
{
  protected $fillable = ['name','item_size','desc','active','user_id','slug'];

  public function getRouteKeyName()
  {
      return 'slug';
  }

  public function user(){
   return $this->belongsTo(User::class,'user_id');
   }
  public function cart(){
    return $this->hasMany(cart::class,'size_id');
   }
  public function inventory(){
    return $this->hasMany(Inventory::class,'size_id');
    }
  public function orderitem(){
    return $this->hasMany(OrderItem::class,'size_id');
    }

}
