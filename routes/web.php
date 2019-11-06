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


/* Initial Page */
Route::get('/', 'HomeController@index')->name('home');

/* Ejercicio 1 */
Route::get('/multiples', 'MultiplesController@index')->name('multiples');