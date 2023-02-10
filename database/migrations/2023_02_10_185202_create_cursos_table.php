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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('title', 250);
            // $table->string('slug')->nullable(); aqui se almacena el nombre del curso separado por guiones
            $table->text('description');
            $table->text('categoria');
            $table->string('img', 250)->default(''); //si no hay imagen el campo se llena con comillas para que no arroje error
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
        Schema::dropIfExists('cursos');
    }
};
