<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdukController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('pages.beranda');
})->name('beranda');

Route::get('/tentang-kami', function () {
    return view('pages.tentang-kami');
})->name('tentang-kami');

Route::get('/produk', [ProdukController::class, 'index'])
    ->name('produk');

Route::get('/produk/{id}', [ProdukController::class, 'show'])
    ->name('detail-produk');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');