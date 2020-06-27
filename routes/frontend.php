<?php

Route::get('login','CustomerController@userlogin');
Route::post('login','CustomerController@userloginprocess')->name('userloginprocess');
Route::get('register','CustomerController@register');
Route::post('register','CustomerController@registration')->name('registration');
Route::get('dashboard','CustomerController@dashboard');
Route::get('logout','AuthController@logout');

// Frontend Routes Are Start Here...............

Route::get('/', 'HomeController@index');
Route::get('addto_cart', 'HomeController@cart');
Route::resource('item', 'HomeController');
Route::resource('about-us', 'AboutController');
Route::resource('contact-us', 'ContactController');

// Frontend Routes Are End Here...............

// Customer Routes Are Start Here...............

// Route::middleware(['auth'])->prefix('andbaazaradmin')->group(function () {
Route::prefix('customer')->group(function () {
    Route::get('/','CustomersController@create');
    Route::post('/','CustomersController@store')->name('profileUpdate');
    Route::resource('shipping','CustomerShippingAddressesController');
    Route::resource('billing','BuyerBillingAddressesController');
    Route::resource('card','BuyerCardsController');
    Route::resource('buyerpayment','BuyerPaymentsController');
});

// Customer Routes Are End Here...............
// forgot password route....

Route::get('forgot_password', 'CustomerController@forgot');
Route::post('forgot_password', 'CustomerController@password');

// Reset  Password Route....

Route::get('reset_password/', 'CustomerController@reset');
Route::put('reset_password/{email}', 'CustomerController@updatePassword');

