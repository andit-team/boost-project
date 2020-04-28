<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Courier;
use App\User;
class ShippingMethod extends Model
{
    protected $fillable = ['name','fees','desc','active','courier_id','user_id','slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user(){
     return $this->belongsTo(User::class,'user_id');
      }
    public function courier(){
      return $this->belongsTo(Courier::class,'courier_id');
     }
     public function order(){
       return $this->hasMany(Order::class,'shipping_method_id');
     }
}
