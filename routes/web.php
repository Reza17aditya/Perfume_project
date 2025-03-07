<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ManController;
use App\Http\Controllers\WomenController;
use App\Http\Controllers\ContactusController;
use App\Https\Controllers\AboutusController;

//main
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/man', [PageController::class, 'man'])->name('man');
Route::get('/woman', [PageController::class, 'woman'])->name('woman');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/account', [PageController::class, 'account'])->name('account');
Route::get('/cart', [PageController::class, 'cart'])->name('cart');

// Routes untuk produk individu
Route::get('/product/{id}', [PageController::class, 'product'])->name('product');

//man category
Route::get('/man', [ManController::class, 'index'])->name('man');
Route::get('/man/{id}', [ManController::class, 'product'])->name('product');

//women
Route::get('/woman', [WomenController::class, 'index'])->name('woman');
Route::get('/woman/{id}', [WomenController::class, 'product'])->name('product');

//Contact us
Route::get('/contactus', [ContactusController::class, 'index'])->name('contactus');

//About
Route::get('/aboutus', [AboutusController::class, 'index'])->name('about');




