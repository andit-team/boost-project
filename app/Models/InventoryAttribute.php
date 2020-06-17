<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryAttribute extends Model
{
    protected $fillable = [
        'name',
        'description',
        'is_required',
        'active',
    ];
}
