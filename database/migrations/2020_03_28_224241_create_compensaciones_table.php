<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompensacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compensaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('tipo', ['Semana', 'Feriado']);
            $table->date('fecha');
            $table->string('horas');

            $table->unsignedBigInteger('lugar_id')->index();
            $table->foreign('lugar_id')->references('id')->on('lugares');

            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users');

            $table->dropForeign(['lugar_id']);
            $table->dropForeign(['user_id']);

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
        Schema::dropIfExists('compensaciones');
    }
}
