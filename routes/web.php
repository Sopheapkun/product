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
Route::get('product/','App\Http\Controllers\Products@index')->name('product./');
Route::get('product/create', 'App\Http\Controllers\Products@create')->name('product.create');
Route::post('product/store', 'App\Http\Controllers\Products@store')->name('product.store');
Route::get('product/edit/{id}', 'App\Http\Controllers\Products@edit')->name('product.edit');
Route::post('product/update/{id}', 'App\Http\Controllers\Products@update')->name('product.update');
Route::delete('product/delete/{id}', 'App\Http\Controllers\Products@delete')->name('product.delete');

//category
Route::get('category/', 'App\Http\Controllers\Categorys@index')->name('index');







