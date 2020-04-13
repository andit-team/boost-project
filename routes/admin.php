<?php

Route::get('register','AuthController@register');


Route::get('login','AuthController@userlogin');


Route::post('userlogin','AuthController@userloginprocess')->name('userloginprocess');

Route::get('dashboard','AuthController@dashboard')->middleware('auth');




Route::get('logout','AuthController@logout');
Route::get('dashboard','AuthController@dashboard');



Route::get('andbaazaradmin/login','AuthController@adminlogin');
Route::post('loginp','AuthController@adminloginprocess')->name('loginproces');

Route::middleware(['auth'])->prefix('andbaazaradmin')->group(function () {
    Route::get('dashboard','AdminHomeController@admindashboard');
});
