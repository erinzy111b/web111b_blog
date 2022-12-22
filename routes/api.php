<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('posts0', function (Request $request) {
//     return $request;
// });
// Route::post('posts1', function (Request $request) {
//     return $request->except('x');
// });

// Route::post('posts2', function (Request $request) {
//     return $request->input('x', 'ZZZZZ');
// });

// // Route::post('items', function (Request $request) {
// //     return $request;
// // });

// Route::post('items', 'App\Http\Controllers\Api\PostController@store');

// Route::middleware('auth:api')->group(function () {
//     Route::apiResource('posts', 'App\Http\Controllers\Api\PostController');
// });

Route::apiResource('posts', 'App\Http\Controllers\Api\PostController');

Route::middleware(['jwt.auth'])->group(function () {
    Route::apiResource('items', 'App\Http\Controllers\Api\ItemController');
    Route::group(['prefix' => 'item', 'namespace' => 'App\Http\Controller\Api'], function () {
        Route::get('querySpecific', 'ItemController@querySpecific');
        Route::get('queryPagination', 'ItemController@queryPagination');
        Route::get('queryRange', 'ItemController@queryRange');
        Route::get('queryByCgy', 'ItemController@queryByCgy');
        Route::get('queryPluck', 'ItemController@queryPluck');
        Route::get('enabledCount', 'ItemController@enabledCount');
        Route::get('queryCgyRelation', 'ItemController@queryCgyRelation');
        Route::get('changeCgy', 'ItemController@changeCgy');
        Route::get('getArticleCgy', 'ItemController@getArticleCgy');
        Route::get('changeAllCgy', 'ItemController@changeAllCgy');
    });
});

Route::group(['prefix' => 'auth', 'namespace' => 'App\Http\Controllers\Api'], function () {
    Route::get('/', 'AuthController@me')->name('me');
    Route::post('login', 'AuthController@login')->name('login');
    Route::post('logout', 'AuthController@logout')->name('logout');
});