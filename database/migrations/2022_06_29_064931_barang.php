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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang', 255)->nullable();
            $table->string('jenis_barang', 50)->nullable();
            $table->string('sumber', 50)->nullable();
            $table->string('id_polres')->nullable();
            $table->integer('jml_barang')->nullable();
            $table->integer('kondisi_bb')->nullable();
            $table->integer('kondisi_rr')->nullable();
            $table->integer('kondisi_rb')->nullable();
            $table->string('keterangan', 255)->nullable();
            $table->string('_token', 255)->nullable();
            $table->string('_method', 5)->nullable();
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
        Schema::dropIfExists('barangs');
    }
};
