<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ItemCategory;
use App\User;

class Category extends Model
{
    protected $fillable = ['name','slug','thumb','patent','sort','active','user_id'];

    public function user(){
     return $this->belongsTo(HrmEmployee::class,'user_id');
   }
   public function itemcategory(){
     return $this->hasMany(ItemCategory::class,'category_id');
   }


}
