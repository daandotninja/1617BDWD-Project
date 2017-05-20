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


/*
|
| MainController
|
*/

Route::get('/', 'MainController@overview');

Route::get('/shops', 'MainController@shops');

Route::get('/about', 'MainController@about');

Route::get('/contact', 'MainController@contact');

Route::get('/product/{id}', 'MainController@product')->where('id', '[0-9]+');