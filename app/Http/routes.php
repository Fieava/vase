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

	// 注册登陆
	Route::get('/login', ['uses' => 'LoginController@login_form']);
	Route::post('/login', ['uses' => 'LoginController@login']);

	// 子导航系统页面
	Route::get('/sub_nav/blank', ['uses' => 'SubNavController@blank']);
	Route::get('/sub_nav/load_error', ['uses' => 'SubNavController@load_error']);
	Route::get('/sub_nav/forbidden', ['uses' => 'SubNavController@forbidden']);

	// 内容区域系统页面
	Route::get('/content/blank', ['uses' => 'ContentController@blank']);
	Route::get('/content/load_error', ['uses' => 'ContentController@load_error']);
	Route::get('/content/forbidden', ['uses' => 'ContentController@forbidden']);

	Route::group(['middleware' => ['access_control']], function () {

		// 主框架
		Route::get('/', ['name' => 'Index.index', 'uses' => 'IndexController@index']);

		// 子导航项目
		Route::get('/sub_nav/projects', ['name' => 'SubNav.project', 'uses' => 'SubNavController@project']);
		Route::get('/sub_nav/models', ['name' => 'SubNav.model', 'uses' => 'SubNavController@model']);
		Route::get('/sub_nav/tasks', ['name' => 'SubNav.task', 'uses' => 'SubNavController@task']);
		Route::get('/sub_nav/tasks/{id}', ['name' => 'SubNav.task_by_project', 'uses' => 'SubNavController@taskByProject']);

		// 内容区域 欢迎页
		Route::get('/content/welcome', ['name' => 'Content.welcome', 'uses' => 'ContentController@welcome']);

		// 内容区域 项目页面
		Route::get('/projects/info/{id}', ['name' => 'Project.info', 'uses' => 'ProjectController@info']);
		Route::post('/projects/edit/{id}', ['name' => 'Project.edit', 'uses' => 'ProjectController@edit']);
		Route::post('/projects/delete/{id}', ['name' => 'Project.delete', 'uses' => 'ProjectController@delete']);
		Route::get('/projects/add_form', ['name' => 'Project.add_form', 'uses' => 'ProjectController@add_form']);
		Route::get('/projects/{id}/models', ['name' => 'Project.model', 'uses' => 'ProjectController@model']);

		// 内容区域 模块页面
		Route::get('/models/{id}/task', ['name' => 'Task.list_by_model', 'uses' => 'TaskController@listByModel']);


		Route::get('/test', ['name' => 'Test.test', 'uses' => 'IndexController@index']);
	});

});
