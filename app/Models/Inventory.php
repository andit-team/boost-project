<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = ['item_id','color_id','qty_stock','size_id','sort','available_on','active','user_id'];
}
