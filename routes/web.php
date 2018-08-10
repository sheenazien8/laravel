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

Route::resource('users', 'UserController');

Route::group(['prefix' => 'blog'],function()
{
	Route::match(['get', 'post'], '/testing', 'BlogController@testing')->name('test');


	Route::get('/', 'BlogController@index');

	Route::get('/create', 'BlogController@create');
	Route::post('/store','BlogController@store');

	Route::get('/{id}', 'BlogController@show');

	Route::get('/{id}/edit', 'BlogController@edit');
	Route::put('/{id}', 'BlogController@update');

	Route::delete('/{id}', 'BlogController@destroy');	
});

