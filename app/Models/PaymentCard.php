<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
class PaymentCard extends Model
{
    protected $fillable = ['name','card_number','mmyy','cc','postCode','address1','address2','town','subcription','aggredTc','sameAsShipping','user_id'];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    
}
