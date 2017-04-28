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
Route::resource('adminpage','AdminController', [ 'middleware' => 'auth']);

Route::get('/', 'ProductsController@index');
Route::get('/cart/{product}', 'ProductsController@addToCart');
Route::get('/cart','ProductsController@showCart');
Route::get('/deleteFromCart/{productNumber}', 'ProductsController@delete');
Route::post('/finishorder', 'ProductsController@sendEmail')->name('sendEmail');
Auth::routes();

Route::get('/home', 'HomeController@index');
