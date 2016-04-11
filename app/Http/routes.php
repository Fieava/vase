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

		Route::get('/sub_nav/blank', ['name' => 'SubNav.blank', 'uses' => 'SubNavController@blank']);
		Route::get('/sub_nav/load_error', ['name' => 'SubNav.load_error', 'uses' => 'SubNavController@load_error']);
		Route::get('/sub_nav/forbidden', ['name' => 'SubNav.forbidden', 'uses' => 'SubNavController@forbidden']);

		Route::get('/sub_nav/projects', ['name' => 'SubNav.project', 'uses' => 'SubNavController@project']);

		Route::get('/content/load_error', ['name' => 'Content.load_error', 'uses' => 'ContentController@load_error']);
		Route::get('/content/forbidden', ['name' => 'Content.forbidden', 'uses' => 'ContentController@forbidden']);

		Route::get('/content/welcome', ['name' => 'Content.welcome', 'uses' => 'ContentController@welcome']);

		Route::get('/projects/info/{id}', ['name' => 'Project.info', 'uses' => 'ProjectController@info']);

		Route::get('/test', ['name' => 'Test.test', 'uses' => 'IndexController@index']);
	});

});
