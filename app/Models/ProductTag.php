<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Tag;
use App\User;

class ProductTag extends Model
{
      protected $fillable = ['tag_id','item_id','user_id','active'];

      public function user()
      {
          return $this->belongsTo(User::class, 'user_id');
      }

      public function tag()
      {
          return $this->belongsTo(Tag::class, 'tag_id');
      }

      public function item()
      {
          return $this->belongsTo(Product::class, 'item_id');
      }
}
