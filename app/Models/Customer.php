<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CustomerBillingAddress;
use App\Models\CustomerShippingAddress;
use App\Models\CustomerCard;
use App\Models\Cart;
use App\Models\Order;
use App\Models\PromotionUse;
use App\Models\Review;
use App\User;

class Customer extends Model
{
     protected $fillable = ['first_name','last_name','phone','picture','dob','gender','description','com_name','com_phone','com_address','com_vat','or_name','or_phone','or_address','or_reg','image','address_1','address_2','postcode','town','last_visited_at','last_visited_from','verification_token','remember_token','active','user_id'];

   public function user(){
    return $this->belongsTo(User::class,'user_id');
     }

    public function buyerbilladd(){
      return $this->hasMany(CustomerBillingAddress::class,'buyer_id');
   }

   public function buyercard(){
     return $this->hasMany(CustomerCard::class,'buyer_id');
  }
    public function buyershippingadd(){
      return $this->hasMany(CustomerShippingAddress::class,'buyer_id');
   }
   public function cart(){
     return $this->hasMany(CustomerShippingAddress::class,'buyer_id');
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
