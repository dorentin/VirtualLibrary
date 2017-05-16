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

Route::get('/regjistrohu', function () {
	return view('signup');
});

Route::get('/dashboard','DashboardController@getDashboardView');
Route::get('/role','RoleController@getRoleView');
Route::post('/createRole','RoleController@createRole');
Route::post('/getRoleData','RoleController@getRoleData');
Route::post('/editRole','RoleController@editRole');
Route::post('/deleteRole','RoleController@deleteRole');

// Route::post('/createRole',[
// 		'uses' => 'RoleController@createRole',
// 		'as'   => 'create'
// ]);

// Route::get('/deleteRole/{id}',[
// 		'uses' => 'RoleController@deleteRole',
// 		'as'   => 'delete'
// ]);

// Route::get('/editRole/{id}',[
// 		'uses' => 'RoleController@editRole',
// 		'as'   => 'edit'
// ]);


