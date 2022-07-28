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
        Schema::create('jadwalpengecekanalkoms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('polres_id')->unsigned()->index()->nullable();
            $table->foreign('polres_id')->references('id')->on('polres')->onDelete('cascade');
            $table->bigInteger('personil_id')->unsigned()->index()->nullable();
            $table->foreign('personil_id')->references('id')->on('personils')->onDelete('cascade');
            $table->timestamp('tgl_pengecekan');
            $table->string('sasaran_pengecekan', 60);
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
        Schema::dropIfExists('jadwalpengecekanalkoms');
    }
};
