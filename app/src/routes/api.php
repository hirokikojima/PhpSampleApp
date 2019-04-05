<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'api'], function() {
    // Get article list.
    Route::get('article/list', 'ArticleController@list');

    // Get article detail.
    Route::get('article/detail/{id}', 'ArticleController@detail');

    // Post article.
    Route::post('article/add', 'ArticleController@add');

    // Update article.
    Route::put('article/update/{id}', 'ArticleController@update');

    // Remove article.
    Route::delete('article/remove/{id}', 'ArticleController@remove');
});
