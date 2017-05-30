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

Route::group(['middleware' => ['auth','admin']], function () {

	Route::get('/admin', 'AdminController@overview');

	Route::get('/admin/order/{id}', 'AdminController@order')->where('id', '[0-9]+'); 

	Route::get('/admin/products', 'AdminController@products');

	Route::get('/admin/product/add', 'AdminController@addproductview');

	Route::get('/admin/product/edit/{id}', 'AdminController@editproductview')->where('id', '[0-9]+'); 

	Route::post('/admin/product/add/save', 'AdminController@saveproduct');

	Route::post('/admin/product/edit/update', 'AdminController@updateproduct');

	Route::post('/admin/updatestatus', 'AdminController@updatestatus');

	Route::delete('/admin/product/delete/{id}', 'AdminController@productdelete')->where('id', '[0-9]+'); 

	Route::get('/admin/shop/info', 'AdminController@info');

	Route::get('/admin/shop/info/edit', 'AdminController@editinfo');

	Route::post('/admin/shop/info/update', 'AdminController@updateinfo');

});

Route::group(['middleware' => 'auth'], function () {

	Route::get('/user/shoppingcar', 'UserController@shoppingcar');
	Route::get('/user', 'UserController@overview');
	Route::post('/user/shoppingcar/add', 'UserController@shoppingcaradd');
	Route::get('/user/order/add', 'UserController@addorder');
	Route::get('/user/shoppingcar/delete/{id}', 'UserController@productdelete')->where('id', '[0-9]+'); 
	Route::get('/user/order/{id}', 'UserController@order')->where('id', '[0-9]+'); 




});

Route::get('/logout', function(){
    Auth::logout();
    return redirect(URL::to('/'));
});

Auth::routes();
