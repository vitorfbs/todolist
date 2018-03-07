<?php
error_reporting(E_ERROR);
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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ListController@index');
Route::post('/create', 'ListController@create')->name('create');
Route::get('/update/{id}', 'ListController@update')->name('update');
Route::get('/delete/{id}', 'ListController@delete')->name('delete');
