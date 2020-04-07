<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
  protected $fillable = ['name','item_size','desc','active','user_id'];

  public function user(){
   return $this->belongsTo(HrmEmployee::class,'user_id');

}
