<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Nombre de las columnas de la tabla "usuarios"
        Schema::create('usuarios', function (Blueprint $table) {
            //$table->id();
            //$table->string("dni", 9); // dni es PK
            //$table->bigInteger("id")->unsigned();
            $table->bigIncrements("id");
            $table->string("nombre", 30);
            $table->string("apellido1", 30);
            $table->string("apellido2", 30);
            $table->string('dni')->unique();
            //$table->string("dni", 9);
            $table->string("direccion", 50);
            $table->string("telefono_contacto", 9);
            //$table->string("correo", 30);
            $table->string('email')->unique();
            $table->string("tipo_usuario"); // alumno, profesor o padre

            // ---------------------------

            // id de tabla eventos
            //$table->unsignedBigInteger('id_evento')->nullable()->change();
            //$table->foreign('id_evento')->references('id')->on('eventos')->onDelete('cascade');

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
        Schema::dropIfExists('usuarios');
    }
}
