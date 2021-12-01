<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prefeitura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prefeitura', function (Blueprint $table) {
            $table->id();
            $table-> string('nome')->unique();
            $table->string('telefone',14)->unique();
            $table->int('habitantes');
            $table->foreignId('cidade_id')->contrained();
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
        Schema::dropIfExists('prefeitura');
    }
}
