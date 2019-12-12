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

	Route::get('/login', 'LoginController@index')->name('login.index');
	Route::post('/login', 'LoginController@verify');
	Route::get('/logout', 'LogoutController@index')->name('logout');

	Route::get('/register', 'RegisterController@index')->name('register.index');
	Route::post('/register', 'RegisterController@index');
	
	//Auth::routes();
	Route::group(['middleware'=>['sess']], function(){
	Route::get('/home','HomeController@index')->name('home');
	Route::get('/mosaic','HomeController@mosaic')->name('mosaic');
	Route::get('/edit','EditController@index')->name('edit.index');
	Route::get('/file','FileController@index')->name('viewfile');
	Route::get('/file/upload','FileController@create')->name('formfile');
	Route::post('/file/upload','FileController@store')->name('uploadfile');
	Route::delete('/file/{id}','FileController@destroy')->name('deletefile');
	Route::get('/file/download/{id}','FileController@show')->name('downloadfile');
	Route::get('/file/email/{id}','FileController@edit')->name('emailfile');
	Route::post('/file/dropzone','FileController@dropzone')->name('dropzone');
});
