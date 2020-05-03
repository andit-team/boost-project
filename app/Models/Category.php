<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ItemCategory;
use App\Models\Item;
use App\User;

class Category extends Model
{

    protected $fillable = ['name','slug','thumb','parent','sort','parent_id','active','user_id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user(){
     return $this->belongsTo(HrmEmployee::class,'user_id');
   }
   public function itemcategory(){
     return $this->hasMany(ItemCategory::class,'category_id');
   }

    public function childs() {
        return $this->hasMany('App\Models\Category','parent_id','id') ;
    }

    public function item(){
       return $this->hasMany(Item::class,'category_id');
    }



}
