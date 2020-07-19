<?php

namespace App\Models\Geo;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $fillable = ['name','bn_name','url','lat','lng','slug','union_id'];
}
