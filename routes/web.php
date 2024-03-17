<?php

use App\Livewire\Shop;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::view('/', 'home');
Route::view('/shop', 'shop.index');
Route::get('/shop/{id}', [Shop::class,'show'])->name('shopshow');
Route::view('/contact', 'contact');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
