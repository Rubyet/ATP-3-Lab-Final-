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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');

//Route::resource("/admin","adminController");

Route::get('/Admin', 'AdminController@index')->name('admin.index');
Route::get('/Admin/create', 'AdminController@create')->name('admin.create');
Route::get('/Admin/list', 'AdminController@show')->name('admin.list');

Route::post('/Admin/create', 'AdminController@store');


Route::get('/Admin/edit/{id}', 'AdminController@edit')->name('admin.edit');
Route::post('/Admin/edit/{id}', 'AdminController@update');
Route::get('/Admin/delete/{id}', 'AdminController@destroy')->name('admin.delete');

//product


Route::get('/product/create', 'ProductController@create')->name('product.create');
Route::get('/product/list', 'ProductController@show')->name('product.list');

Route::post('/product/create', 'ProductController@store');


Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::post('/product/edit/{id}', 'ProductController@update');
Route::get('/product/delete/{id}', 'ProductController@destroy')->name('product.delete');