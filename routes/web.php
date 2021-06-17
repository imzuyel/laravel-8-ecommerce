<?php

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\frontend\CustommerController;



Auth::routes();
Route::get('/clear', [DashboardController::class, 'cache'])->name('cache');
//socialite
Route::group(['as' => 'login.', 'prefix' => 'login'], function () {
    Route::get('/{provider}', [LoginController::class, 'redirectToProvider'])->name('provider');
    Route::get('/{provider}/callback', [LoginController::class, 'redirectToProviderCallback'])->name('providercallback');
});


//Multi language
Route::get('language/english', [LanguageController::class,'English'])->name('language.english');
Route::get('language/bangla',  [LanguageController::class,'Bangla'])->name('language.bangla');

// Custommer
Route::get('/user/login', [CustommerController::class, 'login'])->name('user.login');
Route::get('/user/register', [CustommerController::class, 'register'])->name('user.register');
Route::get('/user/dashboard', [CustommerController::class, 'index'])->middleware('auth')->name('user.index');


Route::get('/', [HomeController::class, 'index'])->name('frontend.home');
Route::get('/shop', [HomeController::class, 'shop'])->name('frontend.shop');
Route::get('/details', [HomeController::class, 'details'])->name('frontend.details');
Route::get('/category', [HomeController::class, 'category'])->name('frontend.category');


//===========get Category in header====================/
// Include Post here
view()->composer('frontend.partials.header', function ($view) {
    $categories = Category::where('status', 1)->latest('id')->get();
    $view->with('categories', $categories);
});




//Custome Page
Route::get('{slug}', [PageController::class, 'index'])->name('page');


