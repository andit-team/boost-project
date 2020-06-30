<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Color;
use App\User;

class ItemImage extends Model
{
  protected $fillable = [
    'product_id',
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
      return $this->belongsTo(Product::class, 'product_id');
  }

  // public function color()
  // {
  //     return $this->belongsTo(Color::class, 'color_id');
  // }

}
