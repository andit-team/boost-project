<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Promotion;
use App\User;
class PromotionPlan extends Model
{
    protected $fillable = ['from_price','to_price','amount','is_free_shipping','active','promotion_id','user_id','slug'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user(){
     return $this->belongsTo(User::class,'user_id');
}
    public function promotion(){
      return $this->belongsTo(Promotion::class,'promotion_id');
 }
}
