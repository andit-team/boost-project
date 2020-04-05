<?php

namespace App;

use Cartalyst\Sentinel\Users\EloquentUser;

class User extends EloquentUser
{
    protected $fillable = [
        'name','deki', 'email', 'password',
    ];
}
