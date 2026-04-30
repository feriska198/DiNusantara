<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController; // Baris ini jangan sampai lupa!

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testing', [GalleryController::class, 'index']);