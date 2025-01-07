<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;

// ROUTE FOR LANDING PAGE
Route::get('/', function () {
    return view('landing.landing');
});

// ROUTE FOR LOGIN PAGE
Route::get('/login', function () {
    return view('forms.login');
})->name('login');

// Route for handling login form submission
Route::post('/login-auth', [AuthController::class, 'login'])->name('auth.login');

// ROUTE FOR SIGNUP PAGE
Route::get('/signup', function () {
    return view('forms.signup');
})->name('signup');

// Route for handling signup form submission
Route::post('/signup', [AuthController::class, 'signup'])->name('auth.signup');

// ROUTE FOR HOME PAGE
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('/orders', [OrderController::class,'index'])->name('admin.orders');
    Route::get('/productstocks', [ProductController::class, 'index'])->name('admin.productstocks');
    Route::get('/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');    // ROUTE FOR INBOX PAGE
    Route::get('/inbox', function () {
        return view('admin.inbox');
    })->name('inbox');
    //// ROUTE FOR LANDING PAGE http://127.0.0.1:8000
    Route::get('/invoice', function () {
        return view('admin.invoice');
    })->name('invoice');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/purchase-history', [HomeController::class, 'purchaseHistory'])->name('purchase.history');

// ROUTE FOR ORDER MANAGEMENT
Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
Route::resource('/orders', OrderController::class);

// ROUTE FOR LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Route::resource('products', ProductController::class);
Route::get('/user/profile', [HomeController::class, 'profile'])->name('user.profile');
Route::post('/user/update', [HomeController::class, 'update'])->name('user.update');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::get('add-to-cart/{product_id}', [CartController::class, 'addToCart'])->name('cart.add');

// Order routes
Route::get('/order/{product}', [OrderController::class, 'create'])->name('order.create');
Route::get('/user/order/purchased', [OrderController::class, 'purchased'])->name('order.purchased'); // Adjusted to match the directory

// Ensure you have other necessary routes
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');


Route::get('/unauthorized', function () {
    return view('errors.unauthorized');
})->name('unauthorized');