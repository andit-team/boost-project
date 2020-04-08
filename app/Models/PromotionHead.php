<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Promotion;
use App\User;
class PromotionHead extends Model
{
  protected $fillable = ['promotion_name','description','active','user_id'];

  public function user(){
   return $this->belongsTo(User::class,'user_id');
  }
 public function promotion(){
   return $this->hasMany(Promotion::class,'promotion_head_id');
 }
}
