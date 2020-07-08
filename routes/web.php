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

function childpath($childs){
  $path = '';
  foreach($childs as $child){
    if($child->is_last == 1){
      $p = '';
      if($child->parent_id != 0){
        $p = App\Models\Category::find($child->parent_id)->name.'/';
      }
      $path .= $p.$child->slug.'/';
    }else{
      $path .= childpath($child->allChilds);
    }
    $path .= '<br>';
  }
  return $path;
}








// // https://stackoverflow.com/questions/26652611/laravel-recursive-relationships
// Route::get('/arr', function () {
//   $inAttr = [
//     'name'  => 'sf ass',
//     'description' =>'descas asdf asdf',
//   ];
//   $attr = App\Models\InventoryAttribute::create($inAttr);
//   dd($attr);
  //
  // $cats = App\Models\Category::with('allChilds')->where('id',2613)->get();
  // $path = childpath($cats);
  // echo $path;
// });








// function childpath($childs){
//   $path = '';
<<<<<<< HEAD
//   foreach($childs as $child){
=======
//   foreach($childs as $child){    
>>>>>>> bf4a0dbb739d23ed189c04002a1c5abde16f3ed9
//     if($child->is_last == 1){
//       $p = '';
//       if($child->parent_id != 0){
//         $p = App\Models\Category::find($child->parent_id)->name.'/';
//       }
//       $path .= $p.$child->slug.'/';
//     }else{
//       $path .= childpath($child->allChilds);
//     }
//     $path .= '<br>';
//   }
//   return $path;
// }
<<<<<<< HEAD

=======
>>>>>>> bf4a0dbb739d23ed189c04002a1c5abde16f3ed9









// Route::get('/arr', function () {
//   $cats = App\Models\Category::with('allChilds')->where('id',25)->get();
//   $path = childpath($cats);
//   echo $path;
// });

<<<<<<< HEAD
// https://stackoverflow.com/questions/26652611/laravel-recursive-relationships
Route::get('/arr', function () {
  $cats = App\Models\Category::with('allChilds')->where('id',196)->get();
  $path = childpath($cats);
  echo $path;
});
=======








>>>>>>> bf4a0dbb739d23ed189c04002a1c5abde16f3ed9
