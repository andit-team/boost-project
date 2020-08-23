<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Product;

class Invoice extends Model
{
    protected $fillable = ['invoice_number','product_id','user_id'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
