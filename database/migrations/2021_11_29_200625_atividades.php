<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Atividades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividades', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tempo');
            $table->text('descriçao')->nullable();
            $table->text('Pendencias')->nullable();
            $table->string('status',2)->nullable();
            $table->foreignIdFor('TipoAtividade') ->constrained();
            $table->foreignIdFor('Receptividade') ->constrained();
            $table->foreignIdFor('ContatoPrefeitura') ->constrained();
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
        Schema::dropIfExists('Atividades');
    }
}
