<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\PackController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

//My store routes
    Route::get('/mystore', [StoreController::class, 'myStore'])->name('store.mystore');
    Route::get('/mystore/search', [StoreController::class, 'search'])->name('store.search');
    Route::get('/mystore/edit', [StoreController::class, 'edit'])->name('store.edit');
    Route::patch('/mystore/update', [StoreController::class, 'update'])->name('store.update');

// Packs routes
    Route::post('/mystore/newpack/store', [PackController::class, 'store'])->name('pack.store');
    Route::get('/mystore/newpack/', [PackController::class, 'create'])->name('pack.create');
    Route::get('/mystore/editpack/{id}', [PackController::class, 'edit'])->where('id', '[0-9]+')->name('pack.edit');
    Route::patch('/mystore/updatepack/{id}', [PackController::class, 'update'])->where('id', '[0-9]+')->name('pack.update');

//Reservations routes
    Route::get('/mystore/reservations', [ReservationController::class, 'showReservations'])->name('reservation.showResByStat');
    Route::post('/mystore/reservations/{id}/update', [ReservationController::class, 'changeStatus'])->where('id', '[0-9]+')->name('reservation.changeStatus');


//Favourites routes
    Route::get('/myFavourites', [FavouriteController::class, 'index'])->name('favourite.index');
    Route::get('/myFavourites/empty', [FavouriteController::class, 'emptyList'])->name('favourite.emptyList');
    Route::get('/pack/{id}/deletefavourite', [FavouriteController::class, 'destroy'])->where('id', '[0-9]+')->name('favourite.destroy');
    Route::get('/pack/{id}/addfavourite', [FavouriteController::class, 'add'])->where('id', '[0-9]+')->name('favourite.add');

    Route::get('/store', function () {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        return redirect()->route('welcome')->with('error', 'You are not authorised to access this link');
    });

// Store routes
    Route::post('/store', [StoreController::class, 'store'])->name('store.store');
    Route::get('/store/create', [StoreController::class, 'create'])->name('store.create');
});

/* Home route */
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

//User routes
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

/* Shop routes */
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/search', [ShopController::class, 'search'])->name('shop.search');

/*Product routes */
Route::get('/pack/{id}', [PackController::class, 'show'])->where('id', '[0-9]+')->name('pack.show');

// Type routes
Route::get('role', [RoleController::class, 'index'])->name('role.index');
Route::get('role/{id}', [RoleController::class, 'show'])->where('id', '[0-9]+')->name('role.show');

// Type routes
Route::get('category', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/{id}', [CategoryController::class, 'show'])->where('id', '[0-9]+')->name('category.show');

//Contact us routes
Route::get('/contactus', [ContactusController::class, 'index'])->name('contactus');

//Cart routes
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::post('/cart-add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart-checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::post('/cart-clear', [CartController::class, 'clear'])->name('cart.clear');
Route::post('/cart-removeitem', [CartController::class, 'removeitem'])->name('cart.removeitem');
Route::patch('/cart-updateitem', [CartController::class, 'updateitem'])->name('cart.updateitem');

//Checkout to charge customer
Route::post('/charge', [CheckoutController::class, 'charge'])->name('checkout.charge');

//Stores routes
Route::get('store/{id}', [StoreController::class, 'show'])->where('id', '[0-9]+')->name('store.show');
Route::get('/store/searchHome', [StoreController::class, 'searchHome'])->name('store.searchHome');
Route::get('/stores', [StoreController::class, 'index'])->name('store.index');
