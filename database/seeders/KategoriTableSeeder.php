<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;
use App\Models\Satuan;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'nama' => 'Minuman',
        ]);

        Kategori::create([
            'nama' => 'Makanan',
        ]);

        Kategori::create([
            'nama' => 'Obat',
        ]);

        // Seeder untuk tabel satuan
        Satuan::create([
            'nama' => 'box',
        ]);

        Satuan::create([
            'nama' => 'pcs',
        ]);
        Satuan::create([
            'nama' => 'kg',
        ]);

    }
}
