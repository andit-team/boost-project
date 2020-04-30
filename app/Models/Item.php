<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\Inventory;
use App\Models\ItemCategory;
use App\Models\ItemImage;
use App\Models\ItemTag;
use App\Models\OrderItem;
use App\Models\Review;
use App\User;
class Item extends Model
{
    protected $fillable = ['name','slug','price','model_no','org_price','sorting','description','min_order','available_on','availability','made_in','materials','labeled','video_url','total_sale_amount','total_order_qty','last_ordered_at','last_carted_at','total_view','activated_at','active','pack_id','user_id'];


        public function getRouteKeyName()
        {
            return 'slug';
        }

    public function user(){
     return $this->belongsTo(User::class,'user_id');
          }
    public function pack(){
      return $this->belongsTo(HrmEmployee::class,'pack_id');
      }
      public function cart(){
        return $this->hasMany(cart::class,'item_id');
     }
     public function inventory(){
       return $this->hasMany(Inventory::class,'item_id');
     }
     public function itemcategory(){
       return $this->hasMany(ItemCategory::class,'item_id');
     }
     public function itemimage(){
       return $this->hasMany(ItemImage::class,'item_id');
     }
     public function itemtag(){
       return $this->hasMany(ItemTag::class,'item_id');
     }
     public function orderitem(){
       return $this->hasMany(OrderItem::class,'item_id');
     }
     public function review(){
       return $this->hasMany(Review::class,'item_id');
     }
}
