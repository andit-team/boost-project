<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemMeta extends Model
{
    protected $fillable = [
        'attr_label',
        'attr_value',
        'attribute_id',
        'product_id',
    ];
}
