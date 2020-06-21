<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AttributeMeta;
class Attribute extends Model
{
    protected $fillable = ['label','suggestion','type','required','search_sidebar','category_id'];

    public function options(){
        return $this->hasMany(AttributeMeta::class,'attribute_id');
    }
}
