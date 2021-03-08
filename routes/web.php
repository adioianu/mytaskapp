<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('welcome');
});





Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');
Route::post('/tasks', 'TasksController@store');
Route::get('/create', 'TasksController@create');
Route::get('/edit' , 'TasksController@edit');
Route::put('/tasks', 'TasksController@update');

Route::resource('tasks','TasksController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');