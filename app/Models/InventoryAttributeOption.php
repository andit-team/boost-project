<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\InventoryAttribute;
class InventoryAttributeOption extends Model
{
    protected $fillable = [
        'option',
        'inventory_attribute_id',
    ];

    public function attribute(){
        return $this->belongsTo(InventoryAttribute::class,'inventory_attribute_id');
    }
}
