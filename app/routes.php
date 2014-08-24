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

// Angular JS Single Page App
Route::get('/', function()
{
	return View::make('angular');
});

// Authentication & verify using csrf token
Route::post('/auth/login', array('before' => 'csrf_token', 'uses' => 'AuthController@login'));
Route::get('/auth/logout', 'AuthController@logout');

// Auth protected API hitpoints
Route::get('/books', array('before' => 'auth', function() {
	return Response::json(array(
		array('title' => 'Sum'),
		array('title' => 'The Martian Chronicals')
	));
}));
