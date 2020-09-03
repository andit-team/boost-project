<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class News extends Model
{
    protected $fillable =['title','desct','user_id'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
