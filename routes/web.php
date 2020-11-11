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

Route::get('/validar', );
Route::get('/login', function () {
    return view('welcome');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/vinci', function () {
    return view('welcome');
});

Route::get('/velazquez', function () {
    return view('welcome');
});

Route::get('/picasso', function () {
    return view('welcome');
});

Route::get('/vangogh', function () {
    return view('welcome');
});

Route::get('/vangogh', function () {
    return view('welcome');
});