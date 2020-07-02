<?php

namespace App\Models;
use App\Models\Product;
use App\Models\Category;
use App\User;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = ['active','category_id','item_id','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function item()
    {
        return $this->belongsTo(Product::class, 'item_id');
    }
}
