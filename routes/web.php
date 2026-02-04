<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/single', function () {
    return view('single');
});

Route::get('/our-factory', function () {
    return view('our-factory');
});
// For Quote Controller
use App\Http\Controllers\QuoteController;

// ... baki routes ke sath ...

Route::post('/quote-store', [QuoteController::class, 'store'])->name('quote.store');

use App\Http\Controllers\ContactController;
Route::post('/contact-store', [ContactController::class, 'store'])->name('contact.store');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});