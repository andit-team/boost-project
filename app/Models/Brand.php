<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model{

  protected $fillable = ['name','description','image'];

  public function category(){
    return $this->belongsToMany(Category::class, 'brand_category', 'brand_id', 'category_id');
  }
    
}
