<?php

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

Route::get('/', 'PagesController@index');
Route::get('/calendar', 'PagesController@calendar');
Route::get('/meatballs', 'PagesController@meatballs');
Route::get('/pancakes', 'PagesController@pancakes');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
