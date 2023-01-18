<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelUnsn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_unsn', function (Blueprint $table) {
            $table->id();
            $table->string('nama_toko', 220);
            $table->string('id_toko', 220);
            $table->string('alamat_toko', 220);
            $table->string('id_barang', 220);
            $table->string('stok_barang', 200);
            $table->timestamp('last_used_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
