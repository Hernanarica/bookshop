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
    return view('sections.home');
})->name('home');

Route::get('/profile', function () {
    return view('sections.profile');
})->name('profile');

Route::get('/register', function () {
    return view('sections.register');
})->name('register');

Route::get('/login', function () {
    return view('sections.login');
})->name('login');