<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContatoPrefeitura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contato_prefeitura', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('Termino_Mandato')->nullable();
            $table->foreignIdFor('prefeitura') ->constrained();
            $table->foreignIdFor('Tipo_Contato') ->constrained();
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
        Schema::dropIfExists('contato_prefeitura');
    }
}
