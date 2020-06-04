<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name','description','image','user_id'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
      }
}
