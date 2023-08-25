<?php

use Illuminate\Support\Facades\Request;

if (!function_exists('setIsActive')){
    function setIsActive($path): string
    {
        return Request::is($path. '*')? 'active' : '';
    }
}

if (!function_exists('setBusinessMenuActive')){
    function setBusinessMenuActive($path): string
    {
        return \Illuminate\Support\Facades\Route::is($path)? 'business-menu-active' : '';
    }
}

if (!function_exists('setMenuActive')){
    function setMenuActive($path): string
    {
        return Request::is($path. '*') ? 'menu-open': '';
    }
}

if (! function_exists('access')) {
    /**
     * Access (lol) the Access:: facade as a simple function.
     */
    function access()
    {
        return app('access');
    }
}
