<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = ['name','color_code','active','user_id'];

    public function user(){
     return $this->belongsTo(HrmEmployee::class,'user_id');
}
