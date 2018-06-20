<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSEOTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_e_o_tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id')->unsigned();
            $table->integer('s_e_o_tag_type_id')->unsigned();
            $table->string('name')->nullable(false);
            $table->text('description');
            $table->string('property_name');
            $table->string('property_value');
            $table->string('content_name');
            $table->string('content_value');
            $table->decimal('priority',10,0);
            $table->timestamps();

            $table->foreign('page_id')->references('id')->on('pages');
                
            $table->foreign('s_e_o_tag_type_id')->references('id')->on('s_e_o_tag_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('s_e_o_tags');
    }
}
