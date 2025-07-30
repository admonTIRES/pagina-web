<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosPaginawebTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos_paginaweb', function (Blueprint $table) {
            $table->increments('ID_FORMULARIO_CONTACTOSPAGINAWEB');
            $table->string('NOMBRE');
            $table->string('CORREO');
            $table->string('TELEFONO');
            $table->text('MENSAJE');
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
        Schema::dropIfExists('contactos_paginaweb');
    }
}
