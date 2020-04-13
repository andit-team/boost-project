<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['parent_id','name','slug','description'];
    public $timestamps = false;
}
