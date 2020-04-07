<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = ['name','code','symbol','active','user_id'];

    public function user(){
     return $this->belongsTo(HrmEmployee::class,'user_id');

}
