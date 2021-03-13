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

Route::get('/producto', 'ProductController@index');
Route::get('/producto/create', 'ProductController@create');
Route::post('/producto/guardar', 'ProductController@guardar');
Route::get('/producto/edit/{id}', 'ProductController@edit');
Route::get('/producto/actualizar/{id}', 'ProductController@actualizar');
Route::get('/producto/delete/{id}', 'ProductController@delete');