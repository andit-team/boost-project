<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuyerCard extends Model
{
  protected $fillable = ['card_number','card_holder_name','card_expire_date','card_cvc','active','buyer_id','user_id'];

  public function user(){
   return $this->belongsTo(HrmEmployee::class,'user_id');

   public function buyer(){
    return $this->belongsTo(HrmEmployee::class,'buyer_id');
}
