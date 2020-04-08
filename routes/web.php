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





Route::get('/fruitsBerries', 'productController@view')->name('fruits');
Route::get('/fruitsBerries/1', 'productController@view')->name('milk');
Route::get('/fruitsBerries/2', 'productController@view')->name('vegetables');
Route::get('/fruitsBerries/3', 'productController@view')->name('concervi');
Route::get('/fruitsBerries/4', 'productController@view')->name('souce');
Route::get('/fruitsBerries/5', 'productController@view')->name('coffe');
Route::get('/fruitsBerries/6', 'productController@view')->name('pasta');
Route::get('/fruitsBerries/7', 'productController@view')->name('meats');
Route::get('/fruitsBerrie8', 'productController@view')->name('orehi');


Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
