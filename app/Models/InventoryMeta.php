<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryMeta extends Model
{
    protected $fillable = [
        'name',
        'value',
        'inventory_id',
        'inventory_attribute_id',
    ];
}
