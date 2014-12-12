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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/user', function() {
    return View::make('user');
});

Route::get('/user/{id}', function($id) {
    $user = User::with('phones')->findOrFail($id);
    return $user;
});
Route::post('/user/create', function(){
    $user = new User();
    $user->name = Request::get('name');
    $user->save();
    return 'Created user with id'. $user->id . 'and name' . $user->name;
});

Route::get('/phone', function() {
    $users = User::lists('name', 'id');
    return View::make('phone', compact('users'));
});

Route::post('/phone/create', function() {
    $user = User::findOrFail(Request::get('user'));

    $phone = new Phone();
    $phone->number = Request::get('number');
    $user->phones()->save($phone);
    return $user;
});
