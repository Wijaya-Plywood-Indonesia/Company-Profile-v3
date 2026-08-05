<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('pages.beranda');
})->name('beranda');

Route::get('/tentang-kami', function () {
    return view('pages.tentang-kami');
})->name('tentang-kami');

Route::get('/produk', function () {
    return view('pages.produk');
})->name('produk');

Route::get('/detail-produk', function () {
    return view('pages.detail-produk');
})->name('detail-produk');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');