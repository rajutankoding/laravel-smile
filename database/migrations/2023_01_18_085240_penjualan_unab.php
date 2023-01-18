<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PenjualanUnab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan_unab', function (Blueprint $table) {
            $table->id();
            $table->string('item_code', 220);
            $table->string('quantity', 220);
            $table->string('pph', 220);
            $table->string('harga_jual_struk', 220);
            $table->string('diskon_detail', 200)->nullable();
            $table->string('jual_setelah_diskon', 200);
            $table->string('ppn_detail', 200);
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
