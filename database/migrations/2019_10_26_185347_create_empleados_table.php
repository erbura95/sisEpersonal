<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('empleado', function (Blueprint $table) {
            $table->char('idempleado',8);
            $table->string('emp_nombre');
            $table->string('emp_appaterno');
            $table->string('emp_apmaterno');
            $table->char('emp_telefono',9)->nullable();;
            $table->string('emp_direccion');
            $table->char('emp_sexo',1);
            $table->string('emp_foto')->nullable();;
            $table->date('emp_nacimiento');
            $table->string('emp_civil');
            $table->primary('idempleado');
            $table->string('emp_estado');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('empleado_area', function (Blueprint $table) {
            $table->increments('idempleadoarea');
            $table->char('idempleado',8);
            $table->integer('idarea')->unsigned();


            $table->foreign('idempleado')->references('idempleado')->on('empleado')->onDelete('cascade');
            $table->foreign('idarea')->references('idarea')->on('area')->onDelete('cascade');
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
        //
        Schema::dropIfExists('empleado');
    }
}
