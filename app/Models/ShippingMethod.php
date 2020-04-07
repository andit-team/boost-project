<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingMethod extends Model
{
    protected $fillable = ['name','fees','desc','active','courier_id','user_id'];

    public function user(){
     return $this->belongsTo(HrmEmployee::class,'user_id');

    public function courier(){
      return $this->belongsTo(HrmEmployee::class,'courier_id');

}
