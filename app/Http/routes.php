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

Route::get('', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('test','WelcomeController@test');

Route::get('tasks/create','TasksController@create');
Route::get('tasks', 'TasksController@index');
Route::post('tasks', 'TasksController@store');

//ignote this for a while
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
