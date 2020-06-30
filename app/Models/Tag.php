<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductTag;
use App\Models\Order;
use App\User;

class Tag extends Model
{
   protected $fillable = ['name','description','slug','active','user_id'];

   public function getRouteKeyName()
   {
       return 'slug';
   }

   public function user(){
    return $this->belongsTo(HrmEmployee::class,'user_id');
    }
    public function itemtag(){
      return $this->hasMany(ProductTag::class,'tag_id');
    }
    public function order(){
      return $this->hasMany(Order::class,'tag_id');
    }

}
