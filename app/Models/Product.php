<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Order;
use App\Models\Invoice;
use App\Models\Cart;

class Product extends Model
{
    protected $fillable = ['product_name','slug','price','weight','product_image','desc','user_id'];
    
      public function getRouteKeyName()
      {
          return 'slug';
      }
      public function user(){
        return $this->belongsTo(User::class,'user_id');
    } 
    public function cart(){
        return $this->hasMany(Cart::class,'product_id');
    }
    public function invoice(){
        return $this->hasOne(Invoice::class,'product_id');
    }

}
