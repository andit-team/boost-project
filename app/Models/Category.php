<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ItemCategory;
use App\Models\Item;
// use App\Models\Children;
use App\User;

class Category extends Model
{

    protected $fillable = ['name','desc','slug','thumb','parent','sort','parent_slug','parent_id','active','is_last','user_id'];

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

    public function child()
    {
      return $this->hasMany('App\Models\Category', 'parent_id','id');
    }

    public function allChilds()
    {
        return $this->child()->with('allChilds');
    }



}
