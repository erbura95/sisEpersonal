<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuestionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuestionario', function (Blueprint $table) {
            $table->increments('idcuestionario');
            $table->string('cu_nombre');
            $table->dateTime('cu_inicio');
            $table->dateTime('cu_final');
            $table->string('cu_tipo');
            $table->timestamps();
        });
        Schema::create('cuestionario_pregunta', function (Blueprint $table) {
            $table->increments('idcupre');
            $table->integer('idcuestionario')->unsigned();
            $table->integer('idpregunta')->unsigned();
            $table->integer('idalternativa')->unsigned();

            $table->foreign('idcuestionario')->references('idcuestionario')->on('cuestionario')->onDelete('cascade');
            $table->foreign('idpregunta')->references('idpregunta')->on('pregunta')->onDelete('cascade');
            $table->foreign('idalternativa')->references('idalternativa')->on('alternativa')->onDelete('cascade');
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
        Schema::dropIfExists('cuestionario');
    }
}
