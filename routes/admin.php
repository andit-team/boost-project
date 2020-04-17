<?php

Route::get('login','CustomerController@userlogin');
Route::post('login','CustomerController@userloginprocess')->name('userloginprocess');
Route::get('register','CustomerController@register');
Route::post('register','CustomerController@registration')->name('registration');
Route::get('dashboard','CustomerController@dashboard');



Route::prefix('merchant')->group(function () {
    Route::get('dashboard','MerchantController@dashboard');
    Route::get('login','MerchantController@merchantlogin');
    Route::post('login','MerchantController@merchantloginprocess')->name('merchantloginprocess');

    Route::get('signup-step-one','MerchantController@registrationStepOne');
    Route::post('signup-step-one','MerchantController@registrationStepOneProcess')->name('merchantStepOne');
    Route::get('signup-step-two','MerchantController@registrationStepTwo');
    Route::post('signup-step-two','MerchantController@registrationStepTwoProcess')->name('merchantStepTwo');
    Route::get('signup-step-final','MerchantController@registrationStepFinal');
    Route::post('signup-step-final','MerchantController@registrationStepFinalProcess')->name('merchantStepFinal');
});





Route::get('logout','AuthController@logout');

Route::get('andbaazaradmin/login','AuthController@adminlogin');
Route::post('andbaazaradmin/login','AuthController@adminloginprocess')->name('loginproces');


Route::middleware(['auth'])->prefix('andbaazaradmin')->group(function () {
    Route::get('dashboard','AdminHomeController@dashboard');
    Route::resource('/category','CategoriesController');
    Route::resource('/size','SizesController');
    Route::resource('/paymentmethod','PaymentMethodsController');
	  Route::resource('/promotionhead','PromotionHeadsController');
    Route::resource('/currency','CurrenciesController');
    Route::resource('/courier','CouriersController');
    Route::resource('/tag','TagsController');
    Route::resource('/color','ColorsController');
    Route::resource('/promotion','PromotionsController');
});
