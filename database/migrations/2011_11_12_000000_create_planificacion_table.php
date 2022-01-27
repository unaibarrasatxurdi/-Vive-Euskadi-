<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Planificacion', function (Blueprint $table) {
            $table->increments('IdPlanificacion');
            $table->foreignId('id')->constrained('users')->onUpdate('cascade');
            $table->string('NombrePlanificacion');
            $table->string('Descripcion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Planificacion');
    }
}
