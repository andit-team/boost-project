<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\ShippingMethod;
class Courier extends Model
{
  protected $fillable = ['name','active','user_id'];

  public function user(){
   return $this->belongsTo(User::class,'user_id')
 }
 public function shippingmethod(){
   return $this->hasMany(ShippingMethod::class,'courier_id');
 }

}
