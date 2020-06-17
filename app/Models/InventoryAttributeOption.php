<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryAttributeOption extends Model
{
    protected $fillable = [
        'option',
        'inventory_attribute_id',
    ];
}
