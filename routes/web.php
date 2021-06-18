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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Shop routes */
Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop.index');
/* Checkout routes */
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout.index');

Route::get('/product/{id}', [App\Http\Controllers\ProductController::class, 'show'])->where('id', '[0-9]+')->name('product.show');
