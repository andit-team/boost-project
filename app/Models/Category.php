<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ItemCategory;
use App\User;

class Category extends Model
{
<<<<<<< HEAD
    protected $fillable = ['name','slug','thumb','parent','sort','active','user_id'];
=======
    protected $fillable = ['name','slug','thumb','patent','sort','active','user_id'];

    public function user(){
     return $this->belongsTo(HrmEmployee::class,'user_id');
   }
   public function itemcategory(){
     return $this->hasMany(ItemCategory::class,'category_id');
   }


>>>>>>> 21ce211a84210f1b1c9a308952180e8e03a6fd63
}
