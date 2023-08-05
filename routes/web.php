<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SocialController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [HomeController::class, 'shop']);
Route::post('/shop', [HomeController::class,  'shopInsert'])->middleware('auth');
Route::get('/cart', [HomeController::class, 'cart'])->middleware('auth');
Route::post('/purchase', [HomeController::class, 'purchase'])->middleware('auth');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/auth/google', [SocialController::class, 'googleRedirect']);
Route::get('/google/redirect', [SocialController::class, 'googleCallback']);
