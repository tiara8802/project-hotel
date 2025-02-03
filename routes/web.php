<?php
<<<<<<< HEAD
// routes/web.php

use App\Http\Controllers\CustomerController;

Route::resource('customers', CustomerController::class);
=======

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'tiara']);
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/home', function () {
    return view('home');
});
>>>>>>> a0db5e8479135862aa3026a19195aa0d0f9aa96e
