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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', 'App\Http\Controllers\FlowerController@index')->name('index');

Route::view('/createFlower','pages\create')->name('createFlower');
Route::post('/create', 'App\Http\Controllers\FlowerController@store');
Route::get('/manage', 'App\Http\Controllers\FlowerController@manage')->name('manage');
Route::get('/edit/{id}', 'App\Http\Controllers\FlowerController@edit')->name('flower.edit');
Route::post('/update/{id}', 'App\Http\Controllers\FlowerController@update')->name('update');
Route::get('/destroy/{id}', 'App\Http\Controllers\FlowerController@destroy')->name('flower.destroy');
