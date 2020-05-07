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
include('admin.php');

// Frontend Route.....


Route::get('/', 'forntEnd\HomeController@index');

// Frontend Controller.....Product Details Route

// Route::get('/product_details/{id}', 'forntEnd\HomeController@details');
Route::get('/addto_cart', 'forntEnd\HomeController@cart');
Route::resource('/product_details', 'forntEnd\HomeController');


























// Route::get('/', function () {
//     return view('welcome');
// });

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



