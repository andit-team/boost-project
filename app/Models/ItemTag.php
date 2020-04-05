<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemTag extends Model
{
      protected $fillable = ['tag_id','item_id','user_id','active'];
}
