<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return View('index');
});

Route::get('about', function () {
    return View('about');
});

Route::get('create', function () {
    return View('create');
});

Route::get('contact', function () {
    return View('contact');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');

Route::get('product/create', 'ProductController@create')->middleware('auth');
Route::get('/product/list', 'ProductController@list')->middleware('auth');
Route::get('product/edit/{product}', 'ProductController@edit')->middleware('auth');

Route::get('product/{product}', 'ProductController@show');


Route::post('/registerProduct', 'ProductController@store')->middleware('auth');
Route::put('product/update/{product}', 'ProductController@update')->middleware('auth');
Route::get('product/delete/{id}', 'ProductController@delete')->middleware('auth');

Route::get('catalogue', 'catalogueController@index');

Route::get('back', 'HomeController@back');
