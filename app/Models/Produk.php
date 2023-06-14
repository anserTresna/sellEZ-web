<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk'; // Nama tabel di basis data

    // Daftar atribut yang dapat diisi secara massal (mass assignable)
    protected $fillable = [
        'nama',
        'harga',
        'jumlah',
        'id_kategori',
        'id_satuan',
    ];

    public function transaksi()
    {
    return $this->hasMany(Transaksi::class);
    }



    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    // Relasi ke model Satuan
    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'id_satuan');
    }
}
