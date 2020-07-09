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

Route::get('catalogue', function () {
    return View('catalogue');
});

Route::get('registered', function () {
    return View('registered');
});

Route::get('create', function () {
    return View('create');
});

// Route::get('registerUser', function () {
//     return View('registerUser');
// });

Route::get('contact', function () {
    return View('contact');
});



Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');

// Route::post('/registerUser', 'userController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');
// Route::post('/registerUser', 'userController@store');

Route::get('/product/registerProduct', 'ProductController@create');
Route::post('/registerProduct', 'ProductController@store');
Route::put('/registerProduct', 'ProductController@store');
