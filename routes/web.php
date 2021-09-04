<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => 'auth'], function () {

//Profile routes
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/profile/{id}', [UserController::class, 'edit'])->where('id', '[0-9]+')->name('user.edit');
    Route::patch('profile/{id}/update', [UserController::class, 'update'])->where('id', '[0-9]+')->name('user.update');

    Route::get('/store', function () {
        if(!Auth::check()) {
            return redirect()->route('login');
        }
        return redirect()->route('welcome')->with('error', 'You are not authorised to access this link');
    });

// Store routes
    Route::post('/store', [StoreController::class, 'store'])->name('store.store');
    Route::get('/store/create', [StoreController::class, 'create'])->name('store.create');
});

/* Home route */
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

//User routes
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

/* Shop routes */
Route::get('/shop', [App\Http\Controllers\ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/search', [App\Http\Controllers\ShopController::class, 'search'])->name('shop.search');

/*Product routes */
Route::get('/pack/{id}', [App\Http\Controllers\PackController::class, 'show'])->where('id', '[0-9]+')->name('pack.show');

// Type routes
Route::get('role', [RoleController::class, 'index'])->name('role.index');
Route::get('role/{id}', [RoleController::class, 'show'])->where('id', '[0-9]+')->name('role.show');

// Type routes
Route::get('category', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/{id}', [CategoryController::class, 'show'])->where('id', '[0-9]+')->name('category.show');

//Contact us routes
Route::get('/contactus', [App\Http\Controllers\ContactusController::class, 'index'])->name('contactus');

//Cart routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::post('/cart-add', [CartController::class,'add'])->name('cart.add');
Route::get('/cart-checkout', [CartController::class,'checkout'])->name('cart.checkout');
Route::post('/cart-clear', [CartController::class,'clear'])->name('cart.clear');
Route::post('/cart-removeitem', [CartController::class,'removeitem'])->name('cart.removeitem');
Route::patch('/cart-updateitem', [CartController::class,'updateitem'])->name('cart.updateitem');

//Checkout to charge customer
Route::post('/charge', [CheckoutController::class, 'charge'])->name('checkout.charge');
