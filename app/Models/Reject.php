<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reject extends Model
{
    protected $fillable = ['reject_name','user_id']; 

    public function user(){
     return $this->belongsTo(User::class,'user_id');
  }
}
