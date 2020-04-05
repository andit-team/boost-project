<?php

Route::get('register','HomeController@register');
Route::get('login','HomeController@login');
Route::get('loginp','HomeController@loginprocess');
Route::get('logout','HomeController@logout');
Route::get('dashboard','HomeController@dashboard');