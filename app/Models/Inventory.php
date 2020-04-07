<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = ['color_name','qty_stock','sort','available_on','active','item_id','color_id','size_id','user_id'];

    public function user(){
     return $this->belongsTo(HrmEmployee::class,'user_id');

    public function item(){
      return $this->belongsTo(HrmEmployee::class,'item_id');

    public function color(){
      return $this->belongsTo(HrmEmployee::class,'color_id');

    public function size(){
      return $this->belongsTo(HrmEmployee::class,'size_id');
}
