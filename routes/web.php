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
Route::resource('adminpage', 'AdController');


/*
Route::get('/adminpage', 'AdminController@index');
Route::get('/adminpage/addproduct', 'AdminController@add');
Route::post('/adminpage/addproduct', 'AdminController@update')->name('addProduct');
Route::get('/adminpage/{product}', 'AdminController@edit');
Route::post('/adminpage/{product}', 'AdminController@update')->name('editProduct');
Route::get('/adminpage/deleteproduct/{product}', 'AdminController@delete');
*/






Route::get('/', 'ProductsController@index');
Route::get('/cart/{product}', 'ProductsController@addToCart');
Route::get('/cart','ProductsController@showCart');
Route::get('/deleteFromCart/{productNumber}', 'ProductsController@delete');
Route::post('/finishorder', 'ProductsController@finishOrder')->name('finishOrder');