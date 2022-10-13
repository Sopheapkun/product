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

//product
Route::get('/','App\Http\Controllers\Products@index');
Route::get('create', 'App\Http\Controllers\Products@create');
Route::post('store', 'App\Http\Controllers\Products@store');
Route::get('edit/{id}', 'App\Http\Controllers\Products@edit');
Route::post('update/{id}', 'App\Http\Controllers\Products@update');
Route::delete('delete/{id}', 'App\Http\Controllers\Products@delete');







