<?php

namespace App\Models\Geo;
use App\Models\Geo\Upazila;
use App\Models\Geo\Municipal;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = ['name','division_id','bn_name','url','lat','lng','slug'];

    public function upazila(){
        return $this->hasMany(Upazila::class);
    }
    public function municipal(){
        return $this->hasMany(Municipal::class);
    }
}
