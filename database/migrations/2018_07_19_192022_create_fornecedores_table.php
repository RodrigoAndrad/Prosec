<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->increments('id');
            $table->text('razao_social');
            $table->text('nome');
            $table->decimal('cnpj',0);
            $table->decimal('ie',0);
            $table->decimal('im',0);
            $table->text('contato');
            $table->decimal('tel',0);
            $table->text('endereco');
            $table->text('complemento');
            $table->decimal('cep',0);
            $table->text('email');
            $table->text('ramo');
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
        Schema::dropIfExists('fornecedores');
    }
}
