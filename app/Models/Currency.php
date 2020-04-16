<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Currency extends Model
{
    protected $fillable = ['name','code','symbol','active','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
