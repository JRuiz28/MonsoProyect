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


// Route::get('/home', 'HomeController@index')->name('home');

Route::post('/registerUser', 'userController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
