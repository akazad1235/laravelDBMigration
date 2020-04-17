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

Route::get('/', 'basicCurdController@index');

Route::get('/create', 'basicCurdController@create');
Route::post('/insert', 'basicCurdController@insert');

Route::get('/updateView', 'basicCurdController@updateView');
Route::post('/update', 'basicCurdController@update');

Route::get('/deleteView', 'basicCurdController@deleteView');
Route::post('/dataDelete', 'basicCurdController@delete');