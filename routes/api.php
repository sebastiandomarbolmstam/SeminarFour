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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//List comments
Route::get('comments/{recipe}', 'CommentController@index');

//List single comment
Route::get('comment/{id}', 'CommentController@show');

//Create new comment
Route::post('comment', 'CommentController@store');

//Update comment
Route::put('comment', 'CommentController@store');

//Delete comment
Route::delete('comment/{id}', 'CommentController@destroy');