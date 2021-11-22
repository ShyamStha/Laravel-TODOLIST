<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/todos', 'TodosController@index');
Route::get('/todos/create', 'TodosController@create');
Route::get('/todos/{id}', 'TodosController@show');
Route::post('/todos', 'TodosController@store');
Route::get('/todos/{id}/edit', 'TodosController@edit');
Route::post('/todos/{id}/updatetodos', 'TodosController@update');
Route::get('/todos/{id}/delete', 'TodosController@destroy');
Route::get('/todos/{id}/complete', 'TodosController@complete');





