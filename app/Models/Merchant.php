<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Shop;
use App\Models\RejectValue;
use App\Models\Country;
class Merchant extends Model
{
      protected $fillable = [
        'first_name',
        'last_name',
        'slug',
        'shop_name',
        'email',
        'phone_number',
        'vat',
        'post_code',
        'city',
        'address_1',
        'address_2',
        'county',
        'fax',
        'merchant_file',
        'status',
        'country_id',
        'user_id'
      ];

      public function getRouteKeyName()
      {
          return 'slug';
      }

      public function user(){
       return $this->belongsTo(User::class,'user_id');
     }
     public function country(){
       return $this->belongsTo(Country::class,'country_id');
     }
    //  public function shop(){
    //    return $this->hasOne(Shop::class,'merchant_id');
    //  }

    //  public function rejectvalue(){
    //   return $this->hasMany(RejectValue::class,'merchant_id');
    // }

}
