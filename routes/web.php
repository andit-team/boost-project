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


























Route::get('arr', function () {
    $data = [
        [
            'name'  => 'Electronic Accessories',
            'child' => [
                [
                  'name'  => 'Mobile Accessories',
                  'child' => [
                    ['name'  => 'Phone Cases'],
                    ['name'  => 'Power Banks'],
                    ['name'  => 'Cables Converters'],
                    ['name'  => 'Cables Converters'],
                    ['name'  => 'Wireless Chargers']
                  ]
                ],
                [
                  'name'  => 'Audio',
                  'child' => [
                    ['name' => 'Phone Cases'],
                    ['name' => 'Home Entertainment'],
                    ['name' => 'Bluetooth Speakers'],
                    ['name' => 'Live sound Stage Equipment'],
                  ]
                ]
            ]
        ],
    ];

      // dd($data);
      Baazar::insertRecords($data);
      

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



