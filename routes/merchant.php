<?php

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
    
    Route::get('/product/subcategory/{id}','ItemsController@subcategory');
    Route::post('/product/approvement/{slug}','ItemsController@approvement');
    Route::put('/product/rejected/{slug}','ItemsController@rejected');
    Route::get('/product/adminIndex','ItemsController@adminIndex');
    Route::get('/product/vendorshow/{slug}','ItemsController@vendorshow');
    Route::resource('/seller','SellersController');
    Route::get('dropzone', 'DropzoneController@ItemsController');
    Route::post('dropzone/store', 'DropzoneController@ItemsController')->name('dropzone.store');
    Route::resource('/product','ItemsController');
    Route::resource('/inventory','InventoriesController');
    
});