<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;

Route::middleware(['auth'])->group(function () {
    Route::get('/products/all', [ProductController::class, 'all'])->name('products.all');
    Route::resource('products', ProductController::class);
  Route::get('/products', [ProductController::class, 'index'])->name('products');


    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
    Route::delete('/cart/{cart}', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
    Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
});



// Correct route definition:

// routes/web.php
use App\Http\Controllers\FrontendController;
Route::get('/', [FrontendController::class, 'landing'])->name('landing');
Route::get('/welcome', function () { return view('welcome');});
Route::get('/landing', function () { return view('index');});
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/terms', [FrontendController::class, 'terms'])->name('terms');
Route::get('/privacy', [FrontendController::class, 'privacy'])->name('privacy');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('/services', [FrontendController::class, 'services'])->name('services');

use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');

// Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');

// Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

use App\Http\Controllers\UserController;
Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('users', UserController::class); // You'd need to scaffold UserController too
});

