<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Produk;
use Exception;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            DB::beginTransaction();

            // Lakukan operasi pembuatan produk
            $product = new Produk();
            $product->nama = 'Mie Indomie Geprek';
            $product->harga = 2400;
            $product->jumlah = 2;
            $product->id_kategori = 5;
            $product->id_satuan = 1;
            $product->save();

            // Lakukan operasi lain yang terkait dengan transaksi

            DB::commit();

            $transactionLevel = DB::transactionLevel();
            if ($transactionLevel === 0) {
                echo "Transaksi berhasil.";
                echo "Data produk berhasil ditambahkan: " . $product->nama;
            } else {
                echo "Transaksi tidak berhasil.";
            }

        } catch (Exception $e) {
            DB::rollback();
            $error = $e->getMessage();
            echo "Transaksi gagal: " . $error;
            throw $e;
        }
    }
}
