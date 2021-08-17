<?php

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
Route::get('/', 'HomeController@home')->name('home');

Route::get('/login/{error?}', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@login')->name('login.login');

Route::group(['middleware' => 'userAuth'], function() {
    Route::get('/logout', 'LoginController@logout')->name('login.logout');

    Route::resource('users', 'UserController');
    Route::resource('clients', 'ClientController');
    Route::resource('products', 'ProductController');
    Route::resource('/orders', 'OrderController');
    Route::get('/order-product/create/{order}', 'OrderProductController@create')->name('order-product.create');
    Route::post('/order-product/store/{order}', 'OrderProductController@store')->name('order-product.store');
    Route::get('/order-product', 'OrderProductController@index')->name('order-product.index');
});



