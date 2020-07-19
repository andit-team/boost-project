<?php

namespace App\Models\Geo;

use Illuminate\Database\Eloquent\Model;

class Union extends Model
{
    protected $fillable = ['name','upazila_id','bn_name','url','lat','lng','slug'];
}
