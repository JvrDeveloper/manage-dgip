<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProtocolosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protocolos', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('resumen');
            $table->string('problematica');
            $table->string('objetivo_gral');
            $table->string('metodologia');
            $table->string('metas');
            $table->integer('proyecto_id');
            $table->timestamps();

            $table->foreign('proyecto_id')->references('id')->on('proyecto')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('protocolos');
    }
}
