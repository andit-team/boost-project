<?php

Route::get('register','AuthController@register');
Route::get('login','AuthController@login');
Route::post('loginp','AuthController@loginprocess')->name('loginproces');
Route::get('logout','AuthController@logout');
Route::get('dashboard','AuthController@dashboard');


Route::middleware(['auth'])->prefix('andbaazaradmin')->group(function () {
    Route::get('dashboard','AdminHomeController@dashboard');
});