<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\Inventory;
use App\Models\ItemImage;
use App\Models\OrderItem;
use App\Models\Product;
use App\User;

class Color extends Model
{
    protected $fillable = ['name','color_code','active','user_id','slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function user(){
     return $this->belongsTo(User::class,'user_id');
   }
   public function cart(){
     return $this->hasMany(cart::class,'color_id');
  }
  public function inventory(){
    return $this->hasMany(Inventory::class,'color_id');
  }
  public function itemimage(){
    return $this->hasMany(ItemImage::class,'item_id');
  }
  public function orderitem(){
    return $this->hasMany(OrderItem::class,'item_id');
  }
  public function item(){
     return $this->hasMany(Product::class,'color_id');
  }

}
