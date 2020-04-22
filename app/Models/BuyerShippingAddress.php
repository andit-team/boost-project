<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Buyer;
use App\User;
class BuyerShippingAddress extends Model
{
    protected $fillable = ['location','address','country','state','city','zip_code','phone','fax','active','buyer_id','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

     public function buyer()
        {
            return $this->belongsTo(Buyer::class, 'buyer_id');
        }
}
