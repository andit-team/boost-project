<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Inventory;

class InventoryMeta extends Model
{
    protected $fillable = [
        'name',
        'value',
        'inventory_id',
        'inventory_attribute_id',
        'product_id',
    ];

    public function inventory(){
        return $this->hasMany(Inventory::class,'product_id');
    }
}
