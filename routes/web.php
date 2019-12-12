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

Route::get('/home', 'HomeController@index')->name('home.index');

//login/out

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');

//reg
Route::get('/Admin/reg', 'AdminController@reg')->name('admin.reg');
Route::post('/Admin/reg', 'AdminController@reg');

//admin

Route::get('/Admin', 'AdminController@index')->name('admin.index');

Route::get('/Admin/create', 'AdminController@create')->name('admin.create');
Route::post('/Admin/create', 'AdminController@store');

Route::get('/Admin/list', 'AdminController@show')->name('admin.list');



Route::get('/Admin/edit/{id}', 'AdminController@edit')->name('admin.edit');
Route::post('/Admin/edit/{id}', 'AdminController@update');
Route::get('/Admin/delete/{id}', 'AdminController@destroy')->name('admin.delete');

//blog

Route::get('/blog', 'BlogController@index')->name('blog.index');

Route::get('/restaurant', 'RestaurantController@index')->name('restaurant.index');