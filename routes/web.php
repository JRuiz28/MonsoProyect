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
Route::get('/', function () {
    return View('index');
});

Route::get('about', function () {
    return View('about');
});

Route::get('product', function () {
    return View('product');
});

Route::get('catalogue', function () {
    return View('catalogue');
});

Route::get('registered', function () {
    return View('registered');
});

Route::get('registerProduct', function () {
    return View('registerProduct');
});

Route::get('registerUser', function () {
    return View('registerUser');
});

Route::get('contact', function () {
    return View('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
