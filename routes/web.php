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

Route::get('/', function () {
    return view('welcome');
});

Route::get('todos', 'TodosController@index')->name('todos.index');
Route::get('todos/{todoId}', 'TodosController@show')->name('todos.show');
Route::post('todos', 'TodosController@store')->name('todos.store');
Route::get('todos/{todoId}/edit', 'TodosController@edit')->name('todos.edit');
Route::put('users/{id}', 'TodosController@update')->name('todos.update');
Route::delete('todos/{todoId}', 'TodosController@destroy')->name('todos.destroy');
