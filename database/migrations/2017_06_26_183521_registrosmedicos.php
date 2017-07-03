<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class registrosmedicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registroAtencion', function (Blueprint $table) {
            $table->increments('id');
            $table->string ('nit')->unique();
            $table->string('f_atencion');
            $table->time('hora');
            $table->string('motivo');
            $table->string('comentarios');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')->on('users'); //Llave Foranea
            
            $table->string('presion_arterial');
            $table->string('peso');
            $table->string('estatura');
            $table->string('estado');
            $table->string('sintomas');
            $table->string('diagnostico');
            $table->string('receta');
            $table->string('proximacita');
            
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
        Schema::dropIfExists('registroAtencion');
    }
}
