<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemTag extends Model
{
      protected $fillable = ['tag_id','item_id','user_id','active'];

      public function user(){
       return $this->belongsTo(HrmEmployee::class,'user_id');

      public function tag(){
        return $this->belongsTo(HrmEmployee::class,'tag_id');

      public function item(){
        return $this->belongsTo(HrmEmployee::class,'item_id');
}
