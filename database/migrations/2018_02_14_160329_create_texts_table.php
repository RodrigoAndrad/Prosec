<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('texts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('description');
            $table->text('title')->nullable(TRUE)->default(NULL);
            $table->text('subtitle')->nullable(TRUE)->default(NULL);
            $table->text('content')->nullable(TRUE)->default(NULL);
            $table->decimal('priority',10,0);
            $table->decimal('order',10,0);
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
        Schema::dropIfExists('texts');
    }
}
