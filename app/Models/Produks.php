<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produks extends Model
{
    protected $fillable = [
    'nama_produk',
    'deskripsi',
    'gambar_utama',
    'galeri',
    'penggunaan',
];

    protected $casts = [
        'galeri' => 'array',
    ];
}
