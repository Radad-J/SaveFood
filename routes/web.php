<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoleController;
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

/* Home route */
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('home');

/* Shop routes */
Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/search', [App\Http\Controllers\ShopController::class, 'search'])->name('shop.search');

/* Checkout routes */
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout.index');

/*Product routes */
Route::get('/pack/{id}', [App\Http\Controllers\PackController::class, 'show'])->where('id', '[0-9]+')->name('pack.show');

// Type routes
Route::get('role', [RoleController::class, 'index'])->name('role.index');
Route::get('role/{id}', [RoleController::class, 'show'])->where('id', '[0-9]+')->name('role.show');

// Type routes
Route::get('category', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/{id}', [CategoryController::class, 'show'])->where('id', '[0-9]+')->name('category.show');
