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


Route::get('/', function () {
    return view('welcome');
});

/**
 * 
 * Routes for showing all tasks
 * 
 */ 

Route::get('tasks', '\App\Http\Controllers\TaskController@index', function () {
    return view('tasks');
});

Route::get('json/tasks', '\App\Http\Controllers\TaskController@showAll', function () {

    return $ret;
}); 


/**
 * 
 * Routes for showing all finished tasks
 * 
 */ 

Route::get('finished-tasks', '\App\Http\Controllers\TaskController@show', function () {
    return view('tasks', ['tasks' => json_decode($ret, true)]);
});

Route::get('json/finished-tasks', '\App\Http\Controllers\TaskController@showFinished', function () {

    return $ret;
}); 

/**
 * 
 * Routes for showing all unfinished tasks
 * 
 */ 

Route::get('unfinished-tasks', '\App\Http\Controllers\TaskController@show', function () {
    return view('tasks', ['tasks' => json_decode($ret, true)]);
});

Route::get('json/unfinished-tasks', '\App\Http\Controllers\TaskController@showUnfinished', function () {

    return $ret;
}); 


/**
 * 
 * Routes for updating a single task
 * 
 */ 

/*Route::get('users', '\App\Http\Controllers\UsersController@index', function () {
    return view('users');
});*/

Route::get('json/tasks/{id}', '\App\Http\Controllers\TaskController@showSingle', function () {

    return $ret;
}); 


/**
 * 
 * Routes for showing all users
 * 
 */ 

Route::get('users', '\App\Http\Controllers\UsersController@index', function () {
    return view('users');
});

Route::get('json/users', '\App\Http\Controllers\UsersController@show', function () {

    return $ret;
}); 


/**
 * 
 * Routes for showing making new tasks tasks
 * 
 */ 

Route::get('makeTask', '\App\Http\Controllers\TaskController@indexMT', function () {});

Route::post('makeTask', '\App\Http\Controllers\TaskController@create', function () {});

Route::post('deleteTask/{id}', '\App\Http\Controllers\TaskController@destroy', function () {});


/*
$api = app('Dingo\Api\Routing\Router');
	$api->version('v1', function($api) {
	$api->get('hello', '\App\Http\Controllers\HomeController@index');
	$api->get('users', '\App\Http\Controllers\UsersController@show');
	$api->get('tasks', '\App\Http\Controllers\TaskController@show');
	$api->get('apitasks', '\App\Http\Controllers\TaskController@apishow');
	$api->get('makeTask', '\App\Http\Controllers\TaskController@index');
	$api->post('makeTask', '\App\Http\Controllers\TaskController@create');
});*/

Route::auth();

Route::get('/home', 'HomeController@index');
