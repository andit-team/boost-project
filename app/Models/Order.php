<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['order_number','invoice_number','tracking_number','subtotal','discount','shipping_cost','grand_total','admin_note','shipping_track','confirm_at','back_ordered_at','cancel_at','status','active','buyer_id','buyer_shipping_address_id','buyer_card_id','shipping_method_id','user_id'];

    public function user(){
     return $this->belongsTo(HrmEmployee::class,'user_id');

    public function tag(){
      return $this->belongsTo(HrmEmployee::class,'buyer_id');

    public function user(){
     return $this->belongsTo(HrmEmployee::class,'buyer_billing_address_id');

    public function tag(){
      return $this->belongsTo(HrmEmployee::class,'buyer_card_id');

    public function user(){
     return $this->belongsTo(HrmEmployee::class,'shipping_method_id');

    public function tag(){
      return $this->belongsTo(HrmEmployee::class,'tag_id');
}
