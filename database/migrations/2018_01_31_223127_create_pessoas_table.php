<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string("pes_nome",255);
            $table->date("pes_data_nascimento");
            $table->string("pes_cpf",14);
            $table->string("pes_telefone",14);
            $table->string("pes_observacoes");             
            $table->timestamps();
            $table->softDeletes();
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
