<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
        protected $fillable = ['name','desc','active','user_id'];
}
