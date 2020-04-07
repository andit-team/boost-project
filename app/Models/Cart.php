<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['rate','qty','active','buyer_id','shop_id','item_id','color_id','size_id','user_id'];

    public function user(){
     return $this->belongsTo(HrmEmployee::class,'user_id');

    public function buyer(){
      return $this->belongsTo(HrmEmployee::class,'buyer_id');

    public function shop(){
    return $this->belongsTo(HrmEmployee::class,'shop_id');

    public function item(){
     return $this->belongsTo(HrmEmployee::class,'item_id');

    public function color(){
      return $this->belongsTo(HrmEmployee::class,'color_id');

    public function size(){
       return $this->belongsTo(HrmEmployee::class,'size_id');
}
