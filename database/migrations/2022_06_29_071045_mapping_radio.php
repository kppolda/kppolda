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
        Schema::create('mappingradios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('polsek_id')->unsigned()->index()->nullable();
            $table->foreign('polsek_id')->references('id')->on('polseks')->onDelete('cascade');
            $table->string('frekuensi_radio_UHF', 60);
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
        Schema::dropIfExists('mappingradios');
    }
};
