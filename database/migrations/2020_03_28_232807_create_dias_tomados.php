<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiasTomados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dias_tomados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('dias');

            $table->unsignedBigInteger('dia_disponible_id')->index();
            $table->foreign('dia_disponible_id')->references('id')->on('dias_disponibles');

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
        Schema::dropIfExists('dias_tomados');
    }
}
