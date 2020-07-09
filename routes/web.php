<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return View('index');
});

Route::get('about', function () {
    return View('about');
});

Route::get('product', function () {
    return View('product');
});

Route::get('registered', function () {
    return View('registered');
});

Route::get('registerProduct', function () {
    return View('registerProduct');
});

// Route::get('registerUser', function () {
//     return View('registerUser');
// });

Route::get('contact', function () {
    return View('contact');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');
Route::post('/registerUser', 'userController@store');

Route::get('product/create', 'ProductController@create');
Route::get('/product/index', 'ProductController@index');
Route::get('/product/list', 'ProductController@list');
Route::get('product/edit/{product}', 'ProductController@edit');


Route::post('/registerProduct', 'ProductController@store');
Route::put('product/update/{product}', 'ProductController@update');
Route::get('product/delete/{id}', 'ProductController@delete');

Route::get('catalogue', 'catalogueController@index');
