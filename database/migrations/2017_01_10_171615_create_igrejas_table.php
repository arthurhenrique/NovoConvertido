<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIgrejasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('igrejas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 45);
            $table->string('endereco', 60);
            $table->string('telefone', 13);
            $table->string('celular', 13);
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
        Schema::drop('igrejas');
    }
}
