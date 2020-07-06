<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;
use App\Models\Color;
use App\Models\Size;
use App\User;
class Inventory extends Model
{
    use SoftDeletes;
    protected $fillable = [
      'product_id',
      'color_id',
      'color_name',
      'slug',
      'qty_stock',
      'price',
      'special_price',
      'start_date',
      'end_date',
      'seller_sku',
      'sort',
      'shop_id',
      'available_on',
      'active',
      'user_id',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function user(){
     return $this->belongsTo(User::class,'user_id');
    }
    public function item(){
      return $this->belongsTo(Product::class,'product_id');
    }
    public function color(){
      return $this->belongsTo(Color::class,'color_id');
    }
    public function size(){
      return $this->belongsTo(Size::class,'size_id');
    }
}
