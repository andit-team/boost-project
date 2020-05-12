<?php



Route::get('andbaazaradmin/login','AuthController@adminlogin');
Route::post('andbaazaradmin/login','AuthController@adminloginprocess')->name('loginproces');


Route::middleware(['auth'])->prefix('andbaazaradmin')->group(function () {
    Route::get('dashboard','AdminHomeController@dashboard');
    Route::get('/category-tree-view',['uses'=>'CategoriesController@manageCategory']);
    Route::post('/add-category',['as'=>'add.category','uses'=>'CategoriesController@addCategory']); 
    Route::resource('/category','CategoriesController');
    Route::resource('/child','ChildrenController');
    Route::resource('/size','SizesController');
    Route::resource('/paymentmethod','PaymentMethodsController');
    Route::resource('/shippingmethod','ShippingMethodsController');
    Route::resource('/promotionhead','PromotionHeadsController');
    Route::resource('/promotionplan','PromotionPlansController');
    Route::resource('/currency','CurrenciesController');
    Route::resource('/courier','CouriersController');

    Route::resource('/tag','TagsController');
    Route::resource('/color','ColorsController');
    Route::resource('/promotion','PromotionsController');

    Route::resource('/shop','ShopsController');

    Route::get('category_setup','CategorySetupController@index');

});
