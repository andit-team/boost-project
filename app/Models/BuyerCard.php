<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BuyerCard extends Model
{
  protected $fillable = ['card_number','card_holder_name','card_expire_date','card_cvc','active','buyer_id','user_id'];

}
