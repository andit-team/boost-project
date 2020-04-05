<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuyerShippingAddress extends Model
{
    protected $fillable = ['location','address','country','state','city','zip_code','phone','fax','active','buyer_id','user_id'];
}
