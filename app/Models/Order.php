<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['order_number','invoice_number','tracking_number','subtotal','discount','shipping_cost','grand_total','admin_note','shipping_track','confirm_at','back_ordered_at','cancel_at','status','active','buyer_id','buyer_billing_address_id','buyer_shipping_address_id','buyer_card_id','shipping_method_id','user_id'];
}
