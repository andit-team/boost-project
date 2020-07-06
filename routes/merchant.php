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

Route::get('merchant/login','MerchantController@merchantlogin');
Route::post('merchant/login','MerchantController@merchantloginprocess')->name('merchantloginprocess');

Route::group(['prefix' => 'merchant','middleware' => ['auth','merchant']],function () {
    Route::get('dashboard','MerchantController@dashboard');


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




    Route::get('/product/subCategoryChild/{id}','ProductsController@subCategoryChild');
    Route::post('/product/approvement/{slug}','ProductsController@approvement');
    Route::put('/product/rejected/{slug}','ProductsController@rejected');
    Route::get('/product/vendorshow/{slug}','ProductsController@vendorshow');
    Route::post('/merchant/approvement/{id}','MerchantController@approvement');
    Route::put('/merchant/rejected/{id}','MerchantController@rejected');
    Route::get('/profile','MerchantController@create');
    Route::post('/profile','MerchantController@store')->name('sellerUpdate');
    Route::get('/shop','ShopsController@create');
    Route::post('/shop','ShopsController@update')->name('shopUpdate');
    Route::get('/merchant/{slug}/resubmit','MerchantController@edit');
    Route::put('/merchant/{slug}','MerchantController@update');
    Route::get('/merchant/{id}','MerchantController@show');
    Route::get('dropzone', 'DropzoneController@ProductsController');
    Route::post('dropzone/store', 'DropzoneController@ProductsController')->name('dropzone.store');
    Route::get('/products','ProductsController@index')->middleware('isMerchantActive');
    Route::get('/products/new','ProductsController@create')->middleware('isMerchantActive');;
    Route::post('/products/new','ProductsController@store')->name('product.store')->middleware('isMerchantActive');;
    Route::get('/products/view/{slug}','ProductsController@show')->middleware('isMerchantActive');;
    Route::get('/products/update/{slug}/productupdate','ProductsController@edit');
    Route::put('/products/update/{slug}','ProductsController@update');
    Route::resource('/product','ProductsController');
    Route::get('/inventories','InventoriesController@index')->middleware('isMerchantActive');
    Route::get('/inventories/new','InventoriesController@create');
    Route::post('/inventories/new','InventoriesController@store')->name('inventory.store');
    Route::get('/inventories/view/{slug}','InventoriesController@show');
    Route::get('/inventories/update/{slug}/invertoryupdate','InventoriesController@edit');
    Route::put('/inventories/update/{slug}','InventoriesController@update');
    Route::resource('/inventories','InventoriesController');
    Route::post('get-inventory-attr','InventoryAttributeController@getInventoryAttr');
    Route::post('get-category-attr','CategoriesController@getCategoryAttr');


    Route::post('shop-logo-crop', 'MerchantController@shopLogoCrop')->name('shop-logo-crop');
    Route::post('shop-banar-crop', 'MerchantController@shopBanarCrop')->name('shop-banar-crop');

});
