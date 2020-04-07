<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromotionHead extends Model
{
  protected $fillable = ['promotion_name','description','active','user_id'];

  public function user(){
   return $this->belongsTo(HrmEmployee::class,'user_id');  
}
