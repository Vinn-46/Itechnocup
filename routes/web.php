<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');
 
Route::get('/password/request', function () {
    return view('passwordrequest');
})->name('passwordrequest');
 
Route::get('/register', function () {
    return view('register');
})->name('register');
 
Route::get('/password/email', function () {
    return view('passwordemail');
})->name('passwordemail');
 