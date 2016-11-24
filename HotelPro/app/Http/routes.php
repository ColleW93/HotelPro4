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

$api = app('Dingo\Api\Routing\Router');

Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks', '\App\Http\Controllers\TaskController@index', function () {
    return view('tasks', ['tasks' => json_decode($ret, true)]);
});

Route::get('json/tasks', '\App\Http\Controllers\TaskController@show', function () {

    return $ret;
}); 

$api->version('v1', function($api) {
	$api->get('hello', '\App\Http\Controllers\HomeController@index');
	$api->get('users', '\App\Http\Controllers\UsersController@show');
	$api->get('tasks', '\App\Http\Controllers\TaskController@show');
	$api->get('apitasks', '\App\Http\Controllers\TaskController@apishow');
	$api->get('makeTask', '\App\Http\Controllers\TaskController@index');
	$api->post('makeTask', '\App\Http\Controllers\TaskController@create');
});

Route::auth();

Route::get('/home', 'HomeController@index');
