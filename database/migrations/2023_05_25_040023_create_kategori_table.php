<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('id_kategori')->unique();
        $table->string('nama');
        $table->timestamps();

        // Schema::table('produk', function (Blueprint $table) {
            // $table->foreign('id_kategori')->references('id_kategori')->on('kategori')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori');
    }
};
