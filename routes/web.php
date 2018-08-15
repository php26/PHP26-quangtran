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

Route::group(['prefix'=> 'admin', 'as'=> 'admin.'], function () {

    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    // Route::get('home', 'Admin\HomeController@index')->name('home');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
});
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users', ['as'=> 'users.index', 'uses'=>'UserController@index']);
Route::get('/users/create', ['as'=> 'users.create', 'uses' =>'UserController@create']);
Route::post('/users', ['as'=> 'users.store', 'uses' =>'UserController@store']);
Route::get('/users/{user}/edit', ['as'=> 'users.edit', 'uses' =>'UserController@edit']);
Route::put('/users/{user}', ['as'=> 'users.update', 'uses' =>'UserController@update']);
Route::delete('/users/{user}', ['as'=> 'users.delete', 'uses' =>'UserController@destroy']);
//CAT

Route::get('/cats', [
	'as' => 'cats.index',
	'uses' => 'CatController@index'
]);

Route::get('/cats', [
	'as' => 'cats.index',
	'uses' => 'CatController@index'
]);
Route::get('/cats/create', [
	'as' => 'cats.create',
	'uses' => 'CatController@create'
]);

Route::post('/cats', [
	'as' => 'cats.store',
	'uses' => 'CatController@store'
]);

Route::get('/cats/{cat}/edit', [
	'as' => 'cats.edit',
	'uses' => 'CatController@edit'
]);

Route::put('/cats/{cat}', [
	'as' => 'cats.update',
	'uses' => 'CatController@update'
]);

Route::delete('/cats/{cat}', [
	'as' => 'cats.delete',
	'uses' => 'CatController@destroy'
]);

// Route::resource('cats', 'CatController');







