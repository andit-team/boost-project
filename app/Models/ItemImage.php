<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\Color;
use App\User;
class Cart ext
class ItemImage extends Model
{
  protected $fillable = ['sort','org_img','list_img','thumb_img','compressed_img','active','item_id','color_id','user_id'];

  public function user(){
   return $this->belongsTo(User::class,'user_id');

  public function item(){
    return $this->belongsTo(Item::class,'item_id');

  public function color(){
    return $this->belongsTo(Color::class,'color_id');

}
