<?php

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\frontend\CartController;
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
Route::get('language/english', [LanguageController::class, 'English'])->name('language.english');
Route::get('language/bangla',  [LanguageController::class, 'Bangla'])->name('language.bangla');

// Custommer
Route::get('/user/login', [CustommerController::class, 'login'])->name('user.login');
Route::get('/user/register', [CustommerController::class, 'register'])->name('user.register');
Route::get('/user/dashboard', [CustommerController::class, 'index'])->middleware('auth')->name('user.index');


Route::get('/', [HomeController::class, 'index'])->name('frontend.home');
Route::get('/shop', [HomeController::class, 'shop'])->name('frontend.shop');
Route::get('/bn/details/{category}/{slug}', [HomeController::class, 'detailsbn'])->name('frontend.detailsbn');
Route::get('/en/details/{category}/{slug}', [HomeController::class, 'detailsen'])->name('frontend.detailsen');
Route::get('/category', [HomeController::class, 'category'])->name('frontend.category');


//Poduct View modal with ajax
Route::get('/product/view/modal/{id}', [HomeController::class, 'viewProduct']);
Route::post('/cart/data/store/{id}', [CartController::class, 'AddToCart']);
Route::get('/product/cart/content/', [CartController::class, 'content']);

//  mini cart
Route::get('/minicart/product-remove/{rowId}', [CartController::class, 'RemoveMiniCart']);
Route::get('/cart-increment/{rowId}', [CartController::class, 'CartIncrement']);
Route::get('/cart-decrement/{rowId}', [CartController::class, 'CartDecrement']);

//=========Category wise product===========//
Route::get('/bn/{category}', [HomeController::class, 'categoryproductsbn'])->name('categoryproductsbn');
Route::get('/en/{category}', [HomeController::class, 'categoryproductsen'])->name('categoryproductsen');

// Subcategory wise product
Route::get('/bn/{category}/{subcategory}', [HomeController::class, 'subcategoryproductsbn'])->name('subcategoryproductsbn');
Route::get('/en/{category}/{subcategory}', [HomeController::class, 'subcategoryproductsen'])->name('subcategoryproductsen');
// Subcategory wise product
Route::get('/bn/{category}/{subcategory}/{subsubcategory}', [HomeController::class, 'subsubcategoryproductsbn'])->name('subsubcategoryproductsbn');
Route::get('/en/{category}/{subcategory}/{subsubcategory}', [HomeController::class, 'subsubcategoryproductsen'])->name('subsubcategoryproductsen');


view()->composer('frontend.partials.header', function ($view) {
    $categories = Category::where('status', 1)->latest('id')->get();
    $view->with('categories', $categories);
});

view()->composer('frontend.partials.minicart', function ($view) {
    $carts = Cart::content();
    $view->with('carts', $carts);
});




//Custome Page
Route::get('{slug}', [PageController::class, 'index'])->name('page');
