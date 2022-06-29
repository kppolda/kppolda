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
        Schema::create('dataInventaris', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('polres_id')->unsigned()->index()->nullable();
            $table->foreign('polres_id')->references('id')->on('polres')->onDelete('casade');
            $table->bigInteger('personil_id')->unsigned()->index()->nullable();
            $table->foreign('personil_id')->references('id')->on('personil')->onDelete('casade');
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
        Schema::dropIfExists('dataInventaris');
    }
};
