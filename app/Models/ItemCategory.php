<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{
    protected $fillable = ['active','category_id','item_id','user_id'];

    public function user(){
     return $this->belongsTo(HrmEmployee::class,'user_id');

    public function category(){
      return $this->belongsTo(HrmEmployee::class,'category_id');

    public function item(){
      return $this->belongsTo(HrmEmployee::class,'item_id');
}
