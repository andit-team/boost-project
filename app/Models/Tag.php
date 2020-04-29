<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ItemTag;
use App\Models\Order;
use App\User;
class Tag extends Model
{
   protected $fillable = ['name','active','user_id','slug'];

   public function getRouteKeyName()
   {
       return 'slug';
   }

   public function user(){
    return $this->belongsTo(HrmEmployee::class,'user_id');
    }
    public function itemtag(){
      return $this->hasMany(ItemTag::class,'tag_id');
    }
    public function order(){
      return $this->hasMany(Order::class,'tag_id');
    }

}
