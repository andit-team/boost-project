<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Merchant;

class Country extends Model
{
    protected $fillable = ['name','user_id'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function merchant(){
        return $this->hasOne(Merchant::class);
    }


}
