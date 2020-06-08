<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
include('frontend.php');
include('merchant.php');
include('admin.php');

























// https://stackoverflow.com/questions/26652611/laravel-recursive-relationships
Route::get('/arr', function () {
  $userprofile = Sentinel::getUser();
        //dd($userprofile);
        $sellerProfile = App\Models\Seller::where('user_id',Sentinel::getUser()->id)->first();
        $shopProfile = App\Models\Shop::where('user_id',Sentinel::getUser()->id)->first();

        return view('merchant.sellers.products',compact('sellerProfile','userprofile','shopProfile'));

});

// Route::post('bill/restore/{slug}', 'diagnostic\BillController@restore');
 
// Route::get('check', function () {

// 	$credentials = [
// 	    'email'    => 'tests@example.com',
// 	    'password' => 'foobar',
// 	];

// 	$data = Sentinel::authenticate($credentials);
// 	dd($data);

// });
// Auth::routes();



