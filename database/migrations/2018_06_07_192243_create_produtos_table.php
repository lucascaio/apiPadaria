<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao', '70');
            $table->decimal('preco', 6,2);
            $table->integer('quantidade')->nullable();
            $table->unsignedInteger('pessoa_id');
            $table->timestamp('data_validade')->nullable();
            $table->timestamp('data_fabricacao')->nullable();
            $table->decimal('peso')->nullable();
            $table->timestamps();
            $table->unsignedInteger('tipo_id');
            $table->foreign('pessoa_id', 'fk_produto_pessoa_id')->references('id')->on('pessoas');
            $table->foreign('tipo_id', 'fk_tipo_id')->references('id')->on('tipos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
