<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PromotionHead;
use App\Models\PromotionPlan;
use App\Models\PromotionUse;
use App\User;
class Promotion extends Model
{
    protected $fillable = ['title','description','is_permanent','valid_from','valid_to','has_coupon_code','coupon_code','multiple_use','priority','active','promotion_head_id','user_id'];

    public function user(){
     return $this->belongsTo(User::class,'user_id');
    }
    public function promotionhead(){
      return $this->belongsTo(PromotionHead::class,'promotion_head_id');
    }
    public function promotionplan(){
      return $this->hasMany(PromotionPlan::class,'promotion_id');
    }
    public function promotionuse(){
      return $this->hasMany(PromotionUse::class,'promotion_id');
    }
}
