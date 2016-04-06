<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

	Route::get('/login', ['uses' => 'LoginController@login_form']);
	Route::post('/login', ['uses' => 'LoginController@login']);

	Route::group(['middleware' => ['access_control']], function () {
		Route::get('/', ['name' => 'Index.index', 'uses' => 'IndexController@index']);
		Route::get('/test', ['name' => 'Test.test', 'uses' => 'IndexController@index']);
	});

});
