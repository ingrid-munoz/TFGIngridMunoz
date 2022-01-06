<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            //$table->id();
            $table->bigIncrements('id');
            // Estos dos se le pediran al usuario que modifique
            $table->string("title",255);
            $table->text("descripcion");
            // Fecha de inicio del evento
            $table->dateTime("start");

            // crear columna donde ira el dato
            //$table->unsignedBigInteger('id_user');
            //$table->unsignedBigInteger('id_user')->nullable();
            //con id funciona
            //$table->primary(['id','start']);

            //$table->foreign('id')->references('id')->on('users');

            // con id_usuario no funciona
            // $table->foreign('id_usuario')->references('id')->on('users');


            // El usuario solo puede crear un evento al dia
            //$table->bigIncrements('id_usuario')->unsigned();
            //$table->foreign('id_usuario')->references('id')->on('usuarios');

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
        Schema::dropIfExists('eventos');
    }
}
