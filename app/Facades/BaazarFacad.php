<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class BaazarFacad extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Baazar';
    }
}
