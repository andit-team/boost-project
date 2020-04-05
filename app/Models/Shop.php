<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
  protected $fillable = ['name','slug','cell_phone','google_location','featured','email','web','description','active','seller_id','user_id'];
}
