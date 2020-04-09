<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Buyer;
use App\Models\Order;
use App\User;
class BuyerCard extends Model
{
  protected $fillable = ['card_number','card_holder_name','card_expire_date','card_cvc','active','buyer_id','user_id'];

  public function user(){
   return $this->belongsTo(User::class,'user_id');
   }

   public function buyer(){
    return $this->belongsTo(Buyer::class,'buyer_id');
    }
    public function order(){
      return $this->hasMany(Order::class,'buyer_card_id');
    }
}
