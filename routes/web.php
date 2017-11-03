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


Route::get('/homework1', function () {
	return view('homework1');
});

Route::get('/items/items', 'ItemController@index')->name('home');
Route::post('/items', 'ItemController@store');
Route::get('/items/{items}/edit', 'ItemController@edit');
Route::patch('/items/{items}', 'ItemController@update');

/*Route::resource('items', 'ItemController');

Route::resource('products', 'ProductController');*/

//Auth::routes();
Route::post('/login', 'Auth\LoginController@login');


/*Route::get('/home', 'HomeController@index')->name('home');*/

Route::get('{path}', function () {
	return view('welcome');
})->where( 'path', '([A-z\d-\/_.]+)?' );