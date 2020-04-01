<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleDiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_dias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dia_disponible_id')->index();
            $table->foreign('dia_disponible_id')->references('id')->on('dias_disponibles');

            $table->unsignedBigInteger('dia_tomado_id')->index();
            $table->foreign('dia_tomado_id')->references('id')->on('dias_tomados');

            $table->dropForeign(['dia_disponible_id']);
            $table->dropForeign(['dia_tomado_id']);

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
        Schema::dropIfExists('detalle_dias');
    }
}
