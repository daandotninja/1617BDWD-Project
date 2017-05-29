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

Route::post('/sendmail', 'MainController@sendmail');

Route::get('/product/{id}', 'MainController@product')->where('id', '[0-9]+');

Route::get('/search', 'MainController@search');


Route::get('/admin', 'AdminController@overview');
Route::get('/admin/order/{id}', 'AdminController@order')->where('id', '[0-9]+'); 
Route::get('/admin/products', 'AdminController@products');

Route::get('/admin/product/add', 'AdminController@addproductview');
Route::post('/admin/product/add/save', 'AdminController@saveproduct');
Route::post('/admin/updatestatus', 'AdminController@updatestatus');
Route::delete('/admin/product/delete/{id}', 'AdminController@productdelete');