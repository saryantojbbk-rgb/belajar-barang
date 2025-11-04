<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('barang_id');
            $table->string('nama_barang');
            $table->string('kategori')->nullable();
            $table->integer('stok')->default(0);
            $table->bigInteger('harga')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang');
    }
};
