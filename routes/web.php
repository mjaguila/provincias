<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('provincias', 'App\Http\Controllers\ProvinciaController@index')->name('provincias.index');
Route::post('provincias/store', 'App\Http\Controllers\ProvinciaController@store')->name('provincias.store');
