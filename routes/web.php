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

Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');


Route::get('/gmaps', ['middleware' => 'HttpsProtocol', 'uses'=>'GmapsController@index'] )->name('map');

Route::get('/firstsuper_create', 'FirstSuper@create')->name('firstsuperCreate');




Route::middleware('Auth')->group(function () {

	Route::prefix('/home/{user}')->group(function () {

		Route::get('/index', 'HomeController@index')->name('homeIndex');

	    Route::middleware('teachers')->group(function () {

		    Route::get('/userIndex', 'UserController@index')->name('UserIndex');

		    Route::get('/userShow/{id_user}', 'UserController@show')->name('UserShow');

		    Route::get('/hogarIndex', 'hogarController@index')->name('hogarIndex');

	    	Route::get('/hogarCreate', 'hogarController@create')->name('hogarCreate');

			Route::post('/hogarStore', 'hogarController@store')->name('hogarStore');

			Route::get('/hogarShow/{id_hogar}', 'hogarController@show')->name('hogarShow');

			Route::get('/hogarEdit', 'hogarController@edit')->name('hogarEdit');
		    
		    Route::post('/hogarUpdate', 'hogarController@update')->name('hogarUpdate');

		    
		}); 

		Route::middleware('admin')->group(function () {

				Route::get('/userCreate', 'UserController@create')->name('UserCreate');

				Route::post('/userStore', 'UserController@store')->name('userStore');

				Route::get('/userEdit', 'UserController@edit')->name('userEdit');

				Route::post('/userUpdate', 'UserController@update')->name('userUpdate');

				Route::get('/userRemove/{id_user}', 'UserController@remove')->name('userRemove');

				Route::get('/hogarRemove/{hogar}', 'hogarController@remove')->name('hogarRemove');

	    		Route::middleware('super')->group(function () {

	    		});
	    	});
	    

	});

});
