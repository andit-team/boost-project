<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','slug','thumb','patent','sort','active','user_id'];

    public function user(){
     return $this->belongsTo(HrmEmployee::class,'user_id');

    
}
