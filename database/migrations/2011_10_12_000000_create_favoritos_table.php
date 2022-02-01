<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Favoritos', function (Blueprint $table) {
            $table->foreignId('id')->constrained('users')->onUpdate('cascade');
            $table->string('DocumentName');
            $table->foreign('DocumentName')->references('DocumentName')->on('Planes')->onUpdate('cascade');
            $table->primary(['id', 'DocumentName']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Favoritos');
    }
}
