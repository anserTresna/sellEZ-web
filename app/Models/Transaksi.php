<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['produk_id', 'jumlah', 'harga', 'subtotal'];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
