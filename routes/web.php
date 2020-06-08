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
  $cats = App\Models\Category::with('allChilds')->find(3);

  // $account->allChildrenAccounts->first()->allChildrenAccounts;
  dd($cats);
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



