<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// routing
Route::resource('/', 'TodoController');
Route::resource('/get_todos', 'TodoController');
Route::resource('/save_todo', 'TodoController@save');
Route::resource('/delete_todo/{id}','TodoController@delete');

Route::get('/unsupported-browser', 'AngularController@unsupported');
