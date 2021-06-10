<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\CustommerController;



Auth::routes();
Route::get('/clear', [DashboardController::class, 'cache'])->name('cache');
//socialite
Route::group(['as' => 'login.', 'prefix' => 'login'], function () {
    Route::get('/{provider}', [LoginController::class, 'redirectToProvider'])->name('provider');
    Route::get('/{provider}/callback', [LoginController::class, 'redirectToProviderCallback'])->name('providercallback');
});

// Custommer
Route::get('/user/login', [CustommerController::class, 'login'])->name('user.login');
Route::get('/user/register', [CustommerController::class, 'register'])->name('user.register');
Route::get('/user/dashboard', [CustommerController::class, 'index'])->middleware('auth')->name('user.index');


Route::get('/', [HomeController::class, 'index'])->name('frontend.home');
Route::get('/shop', [HomeController::class, 'shop'])->name('frontend.shop');
Route::get('/details', [HomeController::class, 'details'])->name('frontend.details');
Route::get('/category', [HomeController::class, 'category'])->name('frontend.category');
//Custome Page
Route::get('{slug}', [PageController::class, 'index'])->name('page');


