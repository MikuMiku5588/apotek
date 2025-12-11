<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Halaman custom
Route::view('/index', 'index')->name('index');
Route::view('/product', 'product')->name('product');
Route::view('/cart', 'cart')->name('cart');
Route::view('/pay', 'pay')->name('pay');
Route::view('/admin', 'admin')->name('admin');
Route::view('/edit', 'edit')->name('edit');
Route::view('/input', 'input')->name('input');
Route::view('/login-ui', 'login')->name('login.ui');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
