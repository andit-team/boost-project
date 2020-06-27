<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\Color;
use App\User;

class ItemImage extends Model
{
  protected $fillable = [
    'item_id',
    'color_slug',
    'sort',
    'org_img',
    'list_img',
    'thumb_img',
    'compressed_img',
    'active',
  ];

  public function item()
  {
      return $this->belongsTo(Item::class, 'item_id');
  }

  // public function color()
  // {
  //     return $this->belongsTo(Color::class, 'color_id');
  // }

}
