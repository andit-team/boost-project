<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
  protected $fillable = ['name','active','user_id'];
}
