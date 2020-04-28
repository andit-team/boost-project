<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BuyerPayment;
use App\User;

class PaymentMethod extends Model
{
        protected $fillable = ['name','desc','active','user_id','slug'];

        public function getRouteKeyName()
        {
            return 'slug';
        }

        public function user(){
         return $this->belongsTo(User::class,'user_id');
       }
         public function buyerpayment(){
           return $this->hasMany(BuyerPayment::class,'payment_method_id');
      }


}
