<?php

namespace App\Models\Geo;
use App\Models\Geo\Union;
use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
    protected $fillable = ['name','district_id','bn_name','url','lat','lng','slug'];

    public function union(){
        return $this->hasMany(Union::class);
    }
}
