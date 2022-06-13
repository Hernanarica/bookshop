<?php

use App\Http\Controllers\PagesViewController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PagesViewController::class, 'homeView'])->name('home.view');
Route::get('/profile', [PagesViewController::class, 'profileView'])->name('profile.view');
Route::get('/register', [PagesViewController::class, 'registerView'])->name('register.view');
Route::post('/register', [UserController::class, 'register'])->name('register.post');
Route::get('/login', [PagesViewController::class, 'loginView'])->name('login.view');
Route::post('/login', [UserController::class, 'login'])->name('login.post');;
Route::post('/logout', [UserController::class, 'logout'])->name('logout.post');