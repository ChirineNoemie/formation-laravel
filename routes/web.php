<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/articles', function () {
    return view('article');
});
Route::get('/posts', function () {
    return "Liste d'articles";
});
// Route::get('/post', function () {
//     return response()->json([
//         "title"=> 'mon super titre',
//         'description' =>'ma super description'
//     ]);
// });
Route::get('/articles', function () {
    return view('article');
});*/
// En utilsant les Controllers
//Route::get('/', 'App\Http\Controllers\PostController@index');
Route::get('/',[PostController::class, 'index'])->name('welcome');
Route::get('/posts/{id}',[PostController::class, 'show']);
Route::get('/contact',[PostController::class,'contact'])->name('contact');
Route::get('/Food',function(){
    return view('FoodKmer');
});
/*Route::get('/Grocery',function(){
    return view('Grocery');
});*/