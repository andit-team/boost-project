<?php

namespace App\Models\Geo;
use App\Models\Geo\MunicipalWard;
use Illuminate\Database\Eloquent\Model;

class Municipal extends Model
{
    protected $fillable = ['name','district_id','bn_name','url','lat','lng','slug'];

    public function wards(){
        return $this->hasMany(MunicipalWard::class);
    }
}
