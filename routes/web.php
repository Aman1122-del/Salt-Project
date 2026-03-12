<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController; // Don't forget this line!

// 1. Home Page (Now Dynamic)
Route::get('/', [ProductController::class, 'home']);

// 2. Products Listing (Now Dynamic)
Route::get('/product', [ProductController::class, 'index']);

// 3. Single Product Details (New Dynamic Route)
// This will handle URLs like /product/edible-salt or /product/salt-lamps
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');

// 4. AJAX Search Route
Route::get('/ajax-search', [ProductController::class, 'search'])->name('product.search');


// Static Pages (No database needed for these yet)
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/our-factory', function () {
    return view('our-factory');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});

// Form Submissions
Route::post('/quote-store', [QuoteController::class, 'store'])->name('quote.store');
Route::post('/contact-store', [ContactController::class, 'store'])->name('contact.store');