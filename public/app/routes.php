<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('server', 'HomeController@getProd');
Route::get('test', 'HomeController@test');
Route::get('api/{var1}/{var2}', 'UserController@api');
Route::get('applist', 'ClientController@appList');
Route::get('appdetails/{id}/{id2}', 'ClientController@appDetails');
//Route::get('/', function()
//{
	//return View::make('index');
//});

Route::get('/', 'HomeController@showWelcome');