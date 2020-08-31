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

Route::get('orders/order-now/{edit?}','OrderController@ordernow');
Route::get('orders/select-delivery','OrderController@selectDelivery');
Route::post('orders/frequency','OrderController@dateFrequency')->name('setDelevaryDate');
Route::get('orders/edit/select-delivery','OrderController@EditDelivery');
Route::post('orders/edit/select-delivery','OrderController@UpdateDelivery')->name('UpdateDelevaryDate');

Route::get('orders/information','OrderController@information');
Route::get('orders/edit/information','OrderController@EditInformation');
Route::post('orders/edit/information','OrderController@UpdateInformation')->name('UpdateInformation');

Route::get('orders/payment-deatils','OrderController@payment');
Route::post('orders/payment-deatils','OrderController@paymentCardSave')->name('saveCard');
Route::get('orders/edit/payment-deatils','OrderController@EditPayment');
Route::post('orders/edit/payment-deatils','OrderController@UpdatePayment')->name('updateCard');

Route::get('orders/overview','OrderController@overview');
Route::post('orders/addcart','OrderController@addCart');
Route::post('orders/decreas','OrderController@orderDecreas');
Route::post('orders/remove','OrderController@orderRemove');

Route::resource('orders','OrderController');
Route::post('strans','PaymentTransController@store');
// Route::resource('trans','PaymentTransController');
// Frontend Routes Are End Here...............

// Customer Routes Are Start Here...............

// Route::middleware(['auth'])->prefix('andbaazaradmin')->group(function () {
Route::prefix('customer')->group(function () {
    Route::get('/','CustomersController@create');
    Route::post('/','CustomersController@store')->name('profileUpdate');
    Route::get('shipping/{slug}/edit','CustomerShippingAddressesController@edit');
    Route::put('shipping/{slug}','CustomerShippingAddressesController@update');
    Route::resource('shipping','CustomerShippingAddressesController');
    Route::get('billing/{slug}/edit','CustomerBillingAddressesController@edit');
    Route::put('billing/{slug}','CustomerBillingAddressesController@update');
    Route::resource('billing','CustomerBillingAddressesController');
    Route::get('card/{slug}/edit','CustomerCardsController@edit');
    Route::put('card/{slug}','CustomerCardsController@update');
    Route::resource('card','CustomerCardsController');
    Route::resource('buyerpayment','BuyerPaymentsController');
    Route::get('payment-transaction','PaymentTransController@index');
    Route::get('profile','CustomerController@customerprofile');
    Route::post('profile','CustomerController@customerprofilestore');
    Route::get('shipping','CustomerController@customershipping');
    Route::post('shipping','CustomerController@customershippingstore');
    Route::get('billing','CustomerController@customerbilling');
    Route::post('billing','CustomerController@customerbillingstore');
});

// Customer Routes Are End Here...............
// forgot password route....

Route::get('forgot_password', 'CustomerController@forgot');
Route::post('forgot_password', 'CustomerController@password');

// Reset  Password Route....

Route::get('reset_password/', 'CustomerController@reset');
Route::put('reset_password/{email}', 'CustomerController@updatePassword');

