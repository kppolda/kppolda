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
        Schema::create('datainventaris', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('polres_id')->unsigned()->index()->nullable();
            $table->foreign('polres_id')->references('id')->on('polres')->onDelete('cascade');
            $table->bigInteger('pelanggan_id')->unsigned()->index()->nullable();
            $table->foreign('pelanggan_id')->references('id')->on('pelangganinternets')->onDelete('cascade');
            $table->string('posisi_inventaris', 255);
            $table->string('bandwith', 15);
            $table->string('keterangan', 255);
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
        Schema::dropIfExists('datainventaris');
    }
};
