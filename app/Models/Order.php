<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\User;

class Order extends Model
{
    protected $fillable = ['product_id','qty','session_id','user_id'];

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
