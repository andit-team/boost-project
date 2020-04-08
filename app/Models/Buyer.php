<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BuyerBillingAddress;
use App\Models\BuyerShippingAddress;
use App\Models\BuyerCard;
use App\Models\Cart;
use App\Models\Order;
use App\Models\PromotionUse;
use App\Models\Review;
use App\User;

class Buyer extends Model
{
     protected $fillable = ['name','dob','gender','description','last_visited_at','last_visited_from','verification_token','remember_token','active','user_id'];

   public function user(){
    return $this->belongsTo(User::class,'user_id');
     }

    public function buyerbilladd(){
      return $this->hasMany(BuyerBillingAddress::class,'buyer_id');
   }

   public function buyercard(){
     return $this->hasMany(BuyerCard::class,'buyer_id');
  }
    public function buyershippingadd(){
      return $this->hasMany(BuyerShippingAddress::class,'buyer_id');
   }
   public function cart(){
     return $this->hasMany(BuyerShippingAddress::class,'buyer_id');
    }
    public function order(){
      return $this->hasMany(Order::class,'buyer_id');
      }
    public function promotionuse(){
      return $this->hasMany(PromotionUse::class,'buyer_id');
    }
    public function review(){
      return $this->hasMany(Review::class,'buyer_id');
    }
  }
