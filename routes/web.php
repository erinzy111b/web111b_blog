<?php

use App\Models\Article;
use App\Models\Cgy;
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

Route::get('/newcgy', function () {
    //第一種方法(這裡只是為演示邏輯進程並方便測試的範例, 實際上幾乎不可能把資料寫在這裡)
    // $cgy = new Cgy;
    // $cgy->title = '我的英雄學院';
    // $cgy->desc = '我的英雄學院劇場版';
    // $cgy->enabled = true;
    //第二種方法(這裡只是為演示邏輯進程並方便測試的範例, 實際上幾乎不可能把資料寫在這裡)
    $cgy = new Cgy(['title' => '我英2', 'desc' => '我英劇場版2', 'enabled' => true]);
    //要加上儲存指示, 資料才會寫進資料庫
    $cgy->save();
});

Route::resource('/cgies', 'App\Http\Controllers\CgyController');

Route::get('/distinct', function () {
    $data = Article::select(['id', 'subject', 'cgy_id'])->distinct('cgy_id')->get();
    return $data;
});

Route::get('/pluck', function () {
    $data = Article::pluck('id', 'subject');
    return $data;
});

//第一種方法//destroy後的$id可以指定多筆 e.g.[1,5,9]
Route::get('/delcgy/{cgy}', function ($id) {
    $cgy = Cgy::destroy($id);
});

// Route::get('/aaaa', function () {
//     $aaa = Article::find(1);
//     dd($aaa->cgy->subject);
// });

// Route::get('/relation', function () {
//     $article = Article::find(1);
//     dd($article->cgy->subject);
// });

// Route::namespace ('App\Http\Controllers')->prefix('articles/aaaa')->group(function () {
//     Route::get('relaCgy/{cgy_id}', 'ArticleController@relaCgy');
// });

Route::get('/relaCgy/{cgy_id}', 'App\Http\Controllers\ArticleController@relaCgy');

Route::get('/bbbb', function () {
    // $article = Article::find(1);
    // $article->cgy_id = 5;
    // $cgy_4 = Cgy::find(4);
    // $article->cgy()->associate($cgy_4);
    // $article->save();
    // dd($article);
    $cgy = Cgy::find(1);
    $article = Article::where('cgy_id', 5)->first();
    $cgy->articles()->save($article);
    dd(Article::find($article->id));

});

//第二種方法
// Route::get('/delcgy/{cgy}', function (Cgy $cgy) {
//     $cgy->delete();
// });

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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
