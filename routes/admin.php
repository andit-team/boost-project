<?php



Route::get('boostadmin/login','AuthController@adminlogin');
Route::post('boostadmin/login','AuthController@adminloginprocess')->name('loginproces');


Route::middleware(['auth','admin'])->prefix('boostadmin')->group(function (){

    Route::get('dashboard','AdminHomeController@dashboard');
    
    
    Route::resource('/child','ChildrenController');
    Route::resource('/paymentmethod','PaymentMethodsController');
    Route::resource('/shippingmethod','ShippingMethodsController'); 
    
    Route::post('/reject-name','RejectListController@other');
    Route::resource('/reject','RejectListController');  
    Route::resource('/invoice','InvoiceController');
    Route::get('/newsfeed','NewsfeedController@feedlist');
    Route::get('/contact-us','ContactController@contactmailList');
    Route::put('/contact-us/{id}','ContactController@replayMail');

    Route::get('products/new-products/new','ProductController@create');
    Route::post('products/new-products/new','ProductController@store')->name('productstore');
    Route::get('products/update-products/{slug}/update','ProductController@edit');
    Route::put('products/update-products/{slug}','ProductController@update');
    Route::resource('products','ProductController');
    Route::get('customer/new-profile','CustomersController@create');
    Route::post('customer/new-profile','CustomersController@store')->name('newcustomerstore');
    Route::get('customer/edit/{id}/update-customer','CustomersController@edit');
    Route::put('customer/edit/{id}','CustomersController@update');
    Route::resource('customer','CustomersController'); 
    Route::resource('order','OrderController');
    Route::get('news/new-news','NewsController@create');
    Route::post('news/new-news','NewsController@store')->name('newsstore');
    Route::get('news/edit/{id}/update-news','NewsController@edit');
    Route::put('news/edit/{id}','NewsController@update');
    Route::resource('news','NewsController');
}); 

