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

Route::get('/', function () {
    return view('welcome');
});

/*未簡化為群組
Route::get('/hello', 'App\Http\Controllers\SiteController@hello');
Route::get('/users/{id?}', 'App\Http\Controllers\UserController@show');
Route::get('/admin', 'App\Http\Controllers\SiteController@scroll');
Route::get('/posts/{post}/comments/{comment}', function ($post, $comment) {
return "posts $post , comments $comment";
//Route::get('/user/{id}', 'App\Http\Controllers\UserController@show');
});*/

Route::namespace ('App\Http\Controllers')->group(function () {
    // Route::get('/hello', 'SiteController@hello');
    // Route::get('/users/{id?}', 'UserController@show');
    // Route::get('/admin', 'SiteController@scroll');
    // Route::get('/qaq', 'SiteController@gallery');
    // Route::get('/qwq', 'SiteController@testgallery');
    // Route::get('/quq', 'SiteController@test');
    // Route::get('/qxq', 'SiteController@');
    // Route::get('/qeq', 'SiteController@');
    // Route::get('/login_', 'SiteController@login_');
    // Route::get('/menu_', 'SiteController@menu');
    // Route::get('AA', 'SiteController@p1');
    // Route::get('post_', 'SiteController@p1');
    Route::resource('posts', 'PostController');
    Route::resource('articles', 'ArticleController');

});

// // Route::miniblog ('App\Http\Controllers')->group(function () {
// //     Route::get('/hello', 'SiteController@hello');

// // });

// // Route::get('/', function () {
// //     return view('welcome');
// // });

// /*
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |
//  */

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::prefix('/users')->group(function () {
//     Route::get('{id?}', 'App\Http\Controllers\UserController@show');
//     Route::get('/', 'App\Http\Controllers\UserController@show2');
// });

// //Route::get('/users/{id}','App\Http\Controllers\UserController@show');

// Route::get('/posts/{post}/comments/{comment}', function ($post, $comment) {
//     return "posts $post , comments $comment";
// });

// // Route::get('/game',function(){
// //     return view('game1');
// // });

// // Route::view('/game2','game2');

// Route::namespace ('App\Http\Controllers')->group(function () {
//     Route::get('pics', 'SiteController@gallery');
//     Route::get('game/{id}', 'SiteController@play');
//     Route::get('admin', 'SiteController@dashboard');
//     Route::get('/hello', 'SiteController@hello');
//     Route::get('/demo', 'SiteController@demo');
// });

// Route::get('paint', function () {
//     return view('paint');
// })->name('mypaint');

// //Route::view('paint','paint');

// Route::middleware(['auth'])->group(function () {

// });

// Route::resource('posts', 'App\Http\Controllers\PostController');

// Route::get('/url', function () {
//     //return url('paint');
//     //return route('mypaint');
//     //return action([SiteController::class,'demo']);
//     return url()->current();
// });