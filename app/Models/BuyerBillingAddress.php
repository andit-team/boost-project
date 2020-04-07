<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuyerBillingAddress extends Model
{
   protected $fillable = ['location','address','country','state','city','zip_code','phone','fax','active','buyer_id','user_id'];

   public function user(){
    return $this->belongsTo(HrmEmployee::class,'user_id');

    public function buyer(){
     return $this->belongsTo(HrmEmployee::class,'buyer_id');
}
