<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Item;
use App\Models\Color;
use App\Models\Size;
use App\User;
class Inventory extends Model
{
    protected $fillable = ['color_name','qty_stock','sort','available_on','active','item_id','color_id','size_id','user_id'];

    public function user(){
     return $this->belongsTo(User::class,'user_id');

    public function item(){
      return $this->belongsTo(Item::class,'item_id');

    public function color(){
      return $this->belongsTo(Color::class,'color_id');

    public function size(){
      return $this->belongsTo(Size::class,'size_id');
}
