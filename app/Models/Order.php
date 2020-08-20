<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\User;

class Order extends Model
{
    protected $fillable = ['product_id','qty','user_id'];

    public function product(){
        return $this->hasMany(Product::class,'product_id');
    }
}
