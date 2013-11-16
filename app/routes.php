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

Route::group(array('before' => 'auth'), function()
{
	Route::get('/', 'HomeController@showWelcome');
	Route::get('logout', 'LoginController@logout');
	Route::get('church', 'ChurchController@index');
	Route::post('church/updateChurch/{id}', 'ChurchController@updateChurch');
	Route::post('church/updateServices/{id}', 'ChurchController@updateServices');
	Route::post('church/updateAttributes/{id}', 'ChurchController@updateAttributes');
	Route::get('room/create', 'RoomController@showCreate');
	Route::post('room/store', 'RoomController@store');

	Route::get('testing1', 'HomeController@testing');
	Route::get('testing2', 'HomeController@testing');
	Route::get('testing3', 'HomeController@testing');
	Route::get('testing4', 'HomeController@testing');
	Route::get('testing5', 'HomeController@testing');
	Route::get('subtest1', 'HomeController@testing');
	Route::get('subtest2', 'HomeController@testing');
	Route::get('subtest3', 'HomeController@testing');
	Route::get('subtest4', 'HomeController@testing');
	Route::get('1subtest1', 'HomeController@testing');
	Route::get('1subtest2', 'HomeController@testing');
	Route::get('1subtest3', 'HomeController@testing');
	Route::get('1subtest4', 'HomeController@testing');
});


Route::get('login', 'LoginController@login');
Route::post('login', array('as' => 'login' , 'uses' => 'LoginController@processLogin'));