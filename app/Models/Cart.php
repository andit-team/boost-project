<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\User;

class Cart extends Model
{
    protected $fillable = ['product_id','qty','price','user_id'];

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
