<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Seller extends Model
{
      protected $fillable = ['name','picture','dob','phone','email','gender','description','last_visited_at','last_visited_from','verification_token','remember_token','active','user_id'];

      public function user(){
       return $this->belongsTo(User::class,'user_id');
     }
     public function shop(){
       return $this->hasMany(Shop::class,'seller_id');
     }

}
