<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
      protected $fillable = ['stars','reply','review_msg','active','buyer_id','item_id','user_id'];
}
