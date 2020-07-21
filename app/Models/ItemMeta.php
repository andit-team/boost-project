<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Attribute;
class ItemMeta extends Model
{
    protected $fillable = [
        'attr_label',
        'attr_value',
        'attribute_id',
        'product_id',
    ];

    public function attributes(){
        return $this->belongsTo(Attribute::class,'attribute_id');
    }
}
