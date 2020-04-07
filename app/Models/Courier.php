<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
  protected $fillable = ['name','active','user_id'];

  public function user(){
   return $this->belongsTo(HrmEmployee::class,'user_id');

}
