<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\User;

class Orderitem extends Model
{
    protected $fillable = ['product_id','qty','price','user_id','order_id'];

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
