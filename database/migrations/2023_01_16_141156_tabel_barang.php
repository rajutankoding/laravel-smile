<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_barang', function (Blueprint $table) {
            $table->id();
            $table->string('item_code', 220);
            $table->string('item_name', 220);
            $table->string('supplier_code', 200);
            $table->string('uom', 200);
            $table->string('buying_price', 200);
            $table->string('last_buying_price', 200);
            $table->string('selling_price', 200);
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
