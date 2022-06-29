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
        Schema::create('personil', function (Blueprint $table) {
            $table->id();
            $table->string('nama_personil', 255);
            $table->string('nrp_personil', 25)->unique();
            $table->string('pangkat_personil', 25);
            $table->string('jabatan_personil', 30);
            $table->string('pendidikan_dikum', 30);
            $table->string('pendidikan_dikbang', 30);
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
        Schema::dropIfExists('personil');
    }
};
