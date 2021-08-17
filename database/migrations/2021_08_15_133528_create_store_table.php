<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store', function (Blueprint $table) {
            $table->id();
            $table->string('nome_fantasia', 100);
            $table->string('cnpj', 25)->nullable();
            $table->string('rua', 100)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('complemento', 30)->nullable();
            $table->string('cidade', 20)->nullable(); 
            $table->string('estado', 10)->nullable(); 
            $table->string('telefone', 20)->nullable(); 
            $table->string('site', 20)->nullable(); 
            $table->string('email', 30)->nullable(); 
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
        Schema::dropIfExists('store');
    }
}
