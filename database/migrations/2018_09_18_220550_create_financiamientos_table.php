<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinanciamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financiamientos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id');
            $table->tinyInteger('estatus');            
            $table->timestamps();
            $table->foreign('admin_id')->references('id')->on('administrador')->onDelete('cascade');            
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
        Schema::dropIfExists('financiamientos');
    }
}
