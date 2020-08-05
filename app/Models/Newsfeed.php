<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Product;

class Newsfeed extends Model
{
    protected $fillable = ['image','title','news_desc','status','type','user_id','product_id'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function item(){
        return $this->belongsTo(Product::class,'product_id');
    } 
}
