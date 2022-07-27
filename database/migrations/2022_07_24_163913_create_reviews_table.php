<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // if(!Schema::hasTable('reviews')){
            Schema::create('reviews', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('id_curso');
                $table->unsignedBigInteger('id_usuario');
                $table->string('nota');
                $table->string('titulo');
                $table->string('descricao');
                $table->timestamps();

                $table->foreign('id_curso')->references('id')->on('cursos');
                $table->foreign('id_usuario')->references('id')->on('usuarios');
            });
        // }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
