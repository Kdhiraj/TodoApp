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
Route::get('todos','Todo\TodosController@index');
//dynamicaly generate routes
Route::get('todos/{todo}',"Todo\TodosController@show");
//display new todos
Route::get('new-todos',"Todo\TodosController@create");
//This is used to store 
Route::post('/store-todos','Todo\TodosController@store');

//to edit data
Route::get('todos/{todos}/edit','Todo\TodosController@edit');
//to update and store
Route::post('/todos/{todos}/update-todos','Todo\TodosController@update');
//To delete data(todo)
Route::get('/todos/{todo}/delete','Todo\TodosController@destroy');
//Completed route
Route::get('/todos/{todo}/complete','Todo\TodosController@complete');

