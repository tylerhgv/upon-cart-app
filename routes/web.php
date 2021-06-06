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

Route::redirect('/', '/home');

Route::view('/home', 'home');
Route::view('/browse', 'browse');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/profile', 'profile');
Route::view('/cart', 'cart');
