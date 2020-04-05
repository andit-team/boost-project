<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
     protected $fillable = ['name','dob','gender','description','last_visited_at','last_visited_from','verification_token','remember_token','active','user_id'];
}
