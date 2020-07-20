<?php

namespace App\Models\Geo;

use Illuminate\Database\Eloquent\Model;

class MunicipalWard extends Model
{
    protected $fillable = ['name','municipal_id','lat','lng'];
}
