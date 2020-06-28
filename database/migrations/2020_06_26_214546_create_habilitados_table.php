<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabilitadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilitados', function (Blueprint $table) {
            $table->id();
            $table->String('apto');
            $table->String('descripcion');
            $table->Integer('persona_id');
            $table->timestamps();
            $table->foreign('persona_id')->references('id')->on('personas');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('habilitados');
    }
}
