<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\Color;
use App\Models\Size;
use App\User;
class Inventory extends Model
{

    protected $fillable = ['item_id','color_id','slug','qty_stock','size_id','sort','available_on','active','user_id'];
    
    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function user(){
     return $this->belongsTo(User::class,'user_id');
    }
    public function item(){
      return $this->belongsTo(Item::class,'item_id');
    }
    public function color(){
      return $this->belongsTo(Color::class,'color_id');
    }
    public function size(){
      return $this->belongsTo(Size::class,'size_id');
    }
}
