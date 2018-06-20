<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentElement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_element', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('component_id')->unsigned();
            $table->integer('element_id')->unsigned();
            $table->text('name');
            $table->text('description');
            $table->timestamps();

            $table->foreign('element_id')->references('id')->on('elements');
            $table->foreign('component_id')->references('id')->on('components');
        });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('component_element');
    }
}
