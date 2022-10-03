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
        Schema::create('polres', function (Blueprint $table) {
            $table->id();
            $table->string('nama_polres', 60);
            $table->string('username', 45);
            $table->integer('dspp')->nullable();
            $table->integer('anggaran')->nullable();
            $table->string('pass', 100);
            $table->string('password', 100);
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
        Schema::dropIfExists('polres');
    }
};
