<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Financiamiento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Screme::create('financiamiento', function(Blueprint $table){
            $table->increments('id');
            $table->integer('admin_id');
            $table->tinyInteger('estatus');            
            $table->timestamps();
            $table->foreign('admin_id')->references('id')->on('administrador')->onDelete('cascade');
            

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('financiamiento');
    }
}
