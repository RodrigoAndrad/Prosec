<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sacs', function (Blueprint $table) {
            $table->increments('id');
            $table->text('condominio');
            $table->text('nome');
            $table->text('administradora');
            $table->decimal('tel1',0);
            $table->decimal('tel2',0);
            $table->text('endereco');
            $table->text('complemento');
            $table->decimal('cep',0);
            $table->text('email');
            $table->text('comentarios');
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
        Schema::dropIfExists('sacs');
    }
}
