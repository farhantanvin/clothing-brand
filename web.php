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
	Route::post('/register', 'RegisterController@insert');
	
	//Auth::routes();


	Route::group(['middleware'=>['sess']], function(){



    Route::get('/admin/home', ['as'=>'home.index','uses'=>'AdminController@indexHome']);
	Route::get('/admin/userList', ['as'=>'admin.index','uses'=>'AdminController@index']);	
	Route::get('/admin/details/{id}', 'AdminController@details')->name('admin.details');

	
	Route::get('/admin/edit/{id}', 'AdminController@edit')->name('admin.edit');
	Route::post('/admin/edit/{id}', 'AdminController@update')->name('admin.update');
	Route::get('/admin/delete/{id}', 'AdminController@delete')->name('admin.delete');
	Route::post('/admin/delete/{id}', 'AdminController@destroy')->name('admin.destroy');
	Route::get('/admin/add', 'AdminController@add')->name('admin.add');
	Route::post('/admin/add', 'AdminController@insert');







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
