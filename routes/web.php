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

Route::get('/navbar', function () {
    return view('layouts.navbar');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/create-account', function () {
    return view('CreateAccount');
});

Route::get('/forgot-password', function () {
    return view('ForgotPassword');
});

Route::get('/home', function () {
    return view('home');
});
