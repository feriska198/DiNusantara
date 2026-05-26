<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

// Halaman Utama (Landing Page)
Route::get('/', function () {
    return view('welcome');
});

// Halaman Sign In (Yang baru kita buat)
Route::get('/login', function () {
    return view('sign'); 
})->name('login');

// Halaman Kumpulan Lukisan (Artworks)
Route::get('/artworks', function () {
    return view('artworks');
})->name('artworks');

// Route Testing kamu
Route::get('/testing', [GalleryController::class, 'index']);