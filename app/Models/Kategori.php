<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
        protected $table = 'kategori'; // Nama tabel di basis data

    // Daftar atribut yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'id_kategori',
        'nama',
    ];

    // Relasi ke model Product
    public function Produk()
    {
        return $this->hasMany(Produk::class, 'id_kategori');
    }
}
