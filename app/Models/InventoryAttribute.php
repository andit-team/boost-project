<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\InventoryAttributeOption;
class InventoryAttribute extends Model
{
    protected $fillable = [
        'name',
        'description',
        'is_required',
        'active',
    ];

    public function options(){
        return $this->hasMany(InventoryAttributeOption::class,'inventory_attribute_id');
    }
}
