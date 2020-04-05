<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name','slug','price','model_no','org_price','pack_id','sorting','description','min_order','available_on','availability','made_in','materials','labeled','video_url','total_sale_amount','total_order_qty','last_ordered_at','last_carted_at','total_view','activated_at','active','user_id'];
}
