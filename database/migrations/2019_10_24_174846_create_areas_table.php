<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('area', function (Blueprint $table) {
            $table->increments('idarea');
            $table->string('nombre_area');
            $table->timestamps();
        });
        Schema::create('area_cargo', function (Blueprint $table) {
            $table->increments('idareacargo');
            $table->integer('idarea')->unsigned();
            $table->integer('idcargo')->unsigned();

            $table->foreign('idarea')->references('idarea')->on('area')->onDelete('cascade');
            $table->foreign('idcargo')->references('idcargo')->on('cargo')->onDelete('cascade');
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
        Schema::dropIfExists('area');
    }
}
