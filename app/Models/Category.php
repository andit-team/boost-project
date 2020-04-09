<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','slug','thumb','parent','sort','active','user_id'];
}
