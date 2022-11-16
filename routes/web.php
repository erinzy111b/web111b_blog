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
    Route::get('/hello', 'SiteController@hello');
    Route::get('/users/{id?}', 'UserController@show');
    Route::get('/qwq', 'SiteController@scroll');
    Route::get('/qaq', 'SiteController@gallery01');
    Route::get('/qoq', 'SiteController@scroll02');
    Route::get('/quq', 'SiteController@room');

});
