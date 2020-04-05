<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemImage extends Model
{
  protected $fillable = ['item_id','color_id','sort','org_img','list_img','thumb_img','compressed_img','active','user_id'];
}
