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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create', function(){
  return view('create');
});
Route::post('/insert', 'FunctionController@add');
Route::get('/update/{id}', 'FunctionController@update');
Route::post('/edit/{id}', 'FunctionController@edit');
Route::get('/delete/{id}', 'FunctionController@delete');

Route::get('/view/{id}', 'FunctionController@view');