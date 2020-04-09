<?php

namespace App;

use Cartalyst\Sentinel\Users\EloquentUser;
use App\Models\Buyer;
use App\Models\BuyerCard;
use App\Models\BuyerPayment;
use App\Models\BuyerShippingAddress;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Color;
use App\Models\Courier;
use App\Models\Inventory;
use App\Models\ItemCategory;
use App\Models\ItemImage;
use App\Models\ItemTag;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\PaymentMethod;
use App\Models\Promotion;
use App\Models\PromotionHead;
use App\Models\PromotionPlan;
use App\Models\PromotionUse;
use App\Models\Review;
use App\Models\Seller;
use App\Models\ShippingMethod;
use App\Models\Shop;
use App\Models\Size;
use App\Models\Tag;
class User extends EloquentUser
{
    protected $fillable = [
        'first_name','last_name', 'email', 'password',
    ];

    public function buyer(){
      return $this->hasMany(Buyer::class,'buyer_id');
   }

     public function buyercard(){
       return $this->hasMany(BuyerCard::class,'buyer_id');
    }
      public function buyerpayment(){
        return $this->hasMany(BuyerPayment::class,'payment_method_id');
     }
     public function buyershippingadd(){
       return $this->hasMany(BuyerShippingAddress::class,'buyer_id');
    }

      public function cart(){
        return $this->hasMany(Cart::class,'user_id');
      }

      public function category(){
        return $this->hasMany(Category::class,'user_id');
      }
      public function color(){
        return $this->hasMany(Color::class,'user_id');
      }
      public function courier(){
        return $this->hasMany(Courier::class,'user_id');
      }
      public function inventory(){
        return $this->hasMany(Inventory::class,'user_id');
      }
      public function itemcategory(){
        return $this->hasMany(ItemCategory::class,'user_id');
      }
      public function itemimage(){
        return $this->hasMany(ItemImage::class,'user_id');
      }
      public function itemtag(){
        return $this->hasMany(ItemTag::class,'user_id');
      }
      public function order(){
        return $this->hasMany(Order::class,'user_id');
      }
      public function orderitem(){
        return $this->hasMany(OrderItem::class,'user_id');
      }
      public function paymentmethod(){
        return $this->hasMany(PaymentMethod::class,'user_id');
      }
      public function promotion(){
        return $this->hasMany(Promotion::class,'user_id');
      }
      public function promotionhead(){
        return $this->hasMany(PromotionHead::class,'user_id');
      }
      public function promotionplan(){
        return $this->hasMany(PromotionPlan::class,'user_id');
      }
      public function promotionuse(){
        return $this->hasMany(PromotionUse::class,'user_id');
      }
      public function review(){
        return $this->hasMany(Review::class,'user_id');
      }
      public function seller(){
        return $this->hasMany(Seller::class,'user_id');
      }
      public function shippingmethod(){
        return $this->hasMany(ShippingMethod::class,'user_id');
      }
      public function shop(){
        return $this->hasMany(Shop::class,'user_id');
      }
      public function size(){
        return $this->hasMany(Size::class,'user_id');
      }
      public function tag(){
        return $this->hasMany(Tag::class,'user_id');
      }
      }
