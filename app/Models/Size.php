<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
  protected $fillable = ['name','item_size','desc','active','user_id'];
}
