<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dietary extends Model
{
    protected $fillable=[
        'name',
    'email',
    'phone',
    'distribution',
    'company_name',
    'message',
    'tc',
    'pp',
];
}
