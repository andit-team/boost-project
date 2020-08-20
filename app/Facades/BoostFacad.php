<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class BoostFacad extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Boost';
    }

    function set_active( $route ) {
        if( is_array( $route ) ){
            return in_array(Request::path(), $route) ? 'active' : '';
        }
        return Request::path() == $route ? 'active' : '';
    }
}
