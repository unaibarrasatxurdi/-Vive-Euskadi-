<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Comentarios', function (Blueprint $table) {
            $table->increments('IdComentario');
            $table->foreignId('id')->constrained('users')->onUpdate('cascade');
            $table->string('DocumentName');
            $table->foreign('DocumentName')->references('DocumentName')->on('Planes')->onUpdate('cascade');
            //$table->foreign('DocumentName')->constrained('Planes')->onUpdate('cascade');
            $table->string('Texto');
            $table->dateTime('Fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Comentarios');
    }
}
