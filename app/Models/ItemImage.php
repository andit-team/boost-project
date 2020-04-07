<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemImage extends Model
{
  protected $fillable = ['sort','org_img','list_img','thumb_img','compressed_img','active','item_id','color_id','user_id'];

  public function user(){
   return $this->belongsTo(HrmEmployee::class,'user_id');

  public function item(){
    return $this->belongsTo(HrmEmployee::class,'item_id');

  public function color(){
    return $this->belongsTo(HrmEmployee::class,'color_id');

}
