<?php


Route::get('sell-on-andbaazar','MerchantController@sellOnAndbaazar');
Route::post('sell-on-andbaazar','MerchantController@sellOnAndbaazarPost')->name('sellOnAndbaazarPost');
Route::get('sell-resubmit-token','MerchantController@resubmitToken');
Route::post('sell-resubmit-token','MerchantController@tokenUpdate')->name('resubmitToken');
Route::post('sell-varifey','MerchantController@verifyToken')->name('tokenVerify');
Route::get('seller-registration','MerchantController@sellerRegistration');
Route::post('seller-registration','MerchantController@registrationStepOne')->name('profileRegistration');
Route::get('seller-shope-registration','MerchantController@shopRegistration');
Route::post('seller-shope-registration','MerchantController@shopRegistrationStore')->name('sellerShopeRegistration');
Route::post('signup-step-one','MerchantController@registrationStepOneProcess')->name('merchantStepOne');
Route::get('terms-condition','MerchantController@termsCondtion');

Route::prefix('merchant')->group(function () {
    Route::get('dashboard','MerchantController@dashboard');
    Route::get('login','MerchantController@merchantlogin');
    Route::post('login','MerchantController@merchantloginprocess')->name('merchantloginprocess');
    
    
    Route::get('signup-step-two','MerchantController@registrationStepTwo');
    Route::post('signup-step-two','MerchantController@registrationStepTwoProcess')->name('merchantStepTwo');
    Route::get('signup-step-final','MerchantController@registrationStepFinal');
    Route::post('signup-step-final','MerchantController@registrationStepFinalProcess')->name('merchantStepFinal');

   // forgot password route....

    Route::get('forgot_password', 'ForgotPassword@forgot');
    Route::post('forgot_password', 'ForgotPassword@password');
    
    // Reset  Password Route....
    
    Route::get('reset_password/', 'ResetPasswordController@reset');
    Route::put('reset_password/{email}', 'ResetPasswordController@updatePassword');



    Route::get('/product/subcategory/{id}','ItemsController@subcategory');
    Route::post('/product/approvement/{slug}','ItemsController@approvement');
    Route::put('/product/rejected/{slug}','ItemsController@rejected');    
    Route::get('/product/vendorshow/{slug}','ItemsController@vendorshow'); 
    Route::post('/seller/approvement/{id}','SellersController@approvement');
    Route::put('/seller/rejected/{id}','SellersController@rejected');
    Route::get('/profile','SellersController@create');
    Route::post('/profile','SellersController@store')->name('sellerUpdate');
    Route::get('/shop','ShopsController@create');
    Route::post('/shop','ShopsController@store')->name('shopUpdate'); 
    Route::get('/seller/{slug}/resubmit','SellersController@edit');
    Route::put('/seller/{slug}','SellersController@update');
    Route::get('/seller/{id}','SellersController@show'); 
    Route::get('dropzone', 'DropzoneController@ItemsController');
    Route::post('dropzone/store', 'DropzoneController@ItemsController')->name('dropzone.store');
    Route::get('/products','ItemsController@index');
    Route::get('/products/new','ItemsController@create');
    Route::post('/products/new','ItemsController@store')->name('product.store');
    Route::get('/products/view/{slug}','ItemsController@show');
    Route::get('/products/update/{slug}/productupdate','ItemsController@edit');
    Route::put('/products/update/{slug}','ItemsController@update');
    Route::resource('/product','ItemsController');
    Route::get('/inventories','InventoriesController@index');
    Route::get('/inventories/new','InventoriesController@create');
    Route::post('/inventories/new','InventoriesController@store')->name('inventory.store');
    Route::get('/inventories/view/{slug}','InventoriesController@show');
    Route::get('/inventories/update/{slug}/invertoryupdate','InventoriesController@edit');
    Route::put('/inventories/update/{slug}','InventoriesController@update');
    Route::resource('/inventory','InventoriesController');


    Route::post('shop-logo-crop', 'MerchantController@shopLogoCrop')->name('shop-logo-crop');
    Route::post('shop-banar-crop', 'MerchantController@shopBanarCrop')->name('shop-banar-crop');
    
});