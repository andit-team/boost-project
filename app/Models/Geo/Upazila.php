<?php

namespace App\Models\Geo;

use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
    protected $fillable = ['name','district_id','bn_name','url','lat','lng','slug'];
}
