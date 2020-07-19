<?php

namespace App\Models\Geo;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = ['name','division_id','bn_name','url','lat','lng','slug'];
}
