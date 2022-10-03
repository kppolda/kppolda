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
        Schema::create('pendahuluans', function (Blueprint $table) {
        $table->id();
        $table->string('jenis')->nullable();
        $table->text('dasar')->nullable();
        $table->text('maksudtujaun')->nullable();
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
        Schema::dropIfExists('pendahuluans');
    }
};
