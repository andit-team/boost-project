<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
      protected $fillable = ['stars','reply','review_msg','active','buyer_id','item_id','user_id'];

      public function user(){
       return $this->belongsTo(HrmEmployee::class,'user_id');

      public function buyer(){
        return $this->belongsTo(HrmEmployee::class,'buyer_id');

      public function item(){
        return $this->belongsTo(HrmEmployee::class,'item_id');
}
