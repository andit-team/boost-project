<?php

Route::get('login','CustomerController@userlogin');
Route::post('login','CustomerController@userloginprocess')->name('userloginprocess');
Route::get('register','CustomerController@register');
Route::post('register','CustomerController@registration')->name('registration');
Route::get('dashboard','CustomerController@dashboard');
Route::get('logout','AuthController@logout');

Route::get('/', 'HomeController@index');
Route::get('addto_cart', 'HomeController@cart');
Route::resource('item', 'HomeController');



// Route::middleware(['auth'])->prefix('andbaazaradmin')->group(function () {
Route::prefix('profile')->group(function () {
    Route::get('/','BuyersController@create');
    Route::post('/','BuyersController@store')->name('profileUpdate');
    Route::resource('shipping','BuyerShippingAddressesController');
    Route::resource('billing','BuyerBillingAddressesController');
    Route::resource('card','BuyerCardsController');
    Route::resource('buyerpayment','BuyerPaymentsController');
});