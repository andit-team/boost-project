<?php

namespace App\Models\Geo;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $fillable = ['name','bn_name','url','lat','lng','slug'];
}
