<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
      protected $guarded = [];

      public function getRouteKeyName()
      {
          return 'slug';
      }

      public function user(){
       return $this->belongsTo(User::class,'user_id');
     }
     public function shop(){
       return $this->hasOne(Shop::class,'agent_id');
     }
}
