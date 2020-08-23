<?php



Route::get('boostadmin/login','AuthController@adminlogin');
Route::post('boostadmin/login','AuthController@adminloginprocess')->name('loginproces');


Route::middleware(['auth','admin'])->prefix('boostadmin')->group(function (){
// Route::prefix('andbaazaradmin')->group(function () {
    Route::get('dashboard','AdminHomeController@dashboard');
    
    
    Route::resource('/child','ChildrenController');
    Route::resource('/paymentmethod','PaymentMethodsController');
    Route::resource('/shippingmethod','ShippingMethodsController'); 
    //Route::get('/seller','SellersController@index');
    Route::post('/reject-name','RejectListController@other');
    Route::resource('/reject','RejectListController'); 
    Route::get('/merchant/new-profile','MerchantController@create');
    Route::post('/merchant/new-profile','MerchantController@store')->name('marchantstore');
    Route::get('/merchant/update-profile/{slug}/updatemerchant','MerchantController@edit');
    Route::put('/merchant/update-profile/{slug}','MerchantController@update');
    Route::resource('/merchant','MerchantController');
    Route::resource('/invoice','InvoiceController');
    Route::get('/newsfeed','NewsfeedController@feedlist');
    Route::get('/contact-us','ContactController@contactmailList');
    Route::put('/contact-us/{id}','ContactController@replayMail');

    Route::get('products/new-products/new','ProductController@create');
    Route::post('products/new-products/new','ProductController@store')->name('productstore');
    Route::get('products/update-products/{slug}/update','ProductController@edit');
    Route::put('products/update-products/{slug}','ProductController@update');
    Route::resource('products','ProductController');
   // SME Product list start //

    Route::get('color-image/{color_slug}','ProductsController@colorWiseImage');

   Route::resource('/shop','ShopsController');

   Route::get('category_setup','CategorySetupController@index');

});

// Category import
Route::get('categoryImport', 'CategoryExportImportController@CategoryImportView');
Route::get('catExport', 'CategoryExportImportController@export')->name('catexport');
Route::post('catImport', 'CategoryExportImportController@import')->name('catimport');

