<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiasDisponiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dias_disponibles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('estado');
            $table->longText('descripcion');

            $table->unsignedBigInteger('compensacion_id');
            $table->foreign('compensacion_id')->references('id')->on('compensaciones');

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
        Schema::dropIfExists('dias_disponibles');
    }
}
