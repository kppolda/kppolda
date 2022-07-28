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
        Schema::create('pelangganInternets', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_langganan', 30);
            $table->string('serial_number', 30);
            $table->string('nama_pelanggan', 255);
            $table->string('penyedia', 15);
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
        Schema::dropIfExists('pelangganInternets');
    }
};
