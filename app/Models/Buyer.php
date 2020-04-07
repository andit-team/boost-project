<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\hrm\HrmEmployee;
class Buyer extends Model
{
     protected $fillable = ['name','dob','gender','description','last_visited_at','last_visited_from','verification_token','remember_token','active','user_id'];

     public function user(){
      return $this->belongsTo(HrmEmployee::class,'user_id');


}
