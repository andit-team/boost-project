<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = ['label','suggestion','type','required','search_sidebar','category_id'];
}
