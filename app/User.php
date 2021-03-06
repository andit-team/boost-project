<?php

namespace App;

use Cartalyst\Sentinel\Users\EloquentUser;
use App\Models\Customer;
use App\Models\CustomerCard;
use App\Models\BuyerPayment;
use App\Models\CustomerShippingAddress;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Color;
use App\Models\Courier;
use App\Models\Inventory;
use App\Models\ProductCategory;
use App\Models\ItemImage;
use App\Models\ProductTag;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\PaymentMethod;
use App\Models\Promotion;
use App\Models\PromotionHead;
use App\Models\PromotionPlan;
use App\Models\PromotionUse;
use App\Models\Review;
use App\Models\Merchant;
use App\Models\ShippingMethod;
use App\Models\Shop;
use App\Models\Size;
use App\Models\Tag;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Newsfeed;
use App\Models\Invoice;
use App\Models\PaymentCard; 

class User extends EloquentUser
{
    protected $fillable = [
        'first_name',
        'last_name',
        'type',
        'com_name',
        'com_phone',
        'com_address',
        'com_vat',
        'or_name',
        'or_phone',
        'or_address',
        'account',
        'or_reg',
        'file_1',
        'file_2',
        'address_1',
        'address_2',
        'postcode',
        'town',
        'email', 
        'password',
    ];
    protected $loginNames = ['email','type'];

    public function invoice(){
      return $this->hasOne(Invoice::class,'user_id');
    }
    public function card(){
      return $this->hasOne(PaymentCard::class,'user_id');
    } 
    public function order(){
      return $this->hasMany(Order::class,'user_id');
    }  
    public function cart(){
      return $this->hasMany(Cart::class,'user_id');
    }  
    public function inventory(){
      return $this->hasMany(Inventory::class,'user_id');
    }
    public function product(){
        return $this->hasMany(Product::class,'user_id');
    }   
    public function orderitem(){
      return $this->hasMany(OrderItem::class,'user_id');
    }
      
      
    }
