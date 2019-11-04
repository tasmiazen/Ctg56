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



Route::get('/', 'FormController@show')->name('data.show');
Route::post('/','FormController@store')->name('data.store');

Route::get('/task/{id}/edit','FormController@edit')->name('data.edit.show');
Route::post('/task/{id}/edit','FormController@update')->name('data.update');
Route::get('task/{id}/delete','FormController@delete')->name('data.delete');
