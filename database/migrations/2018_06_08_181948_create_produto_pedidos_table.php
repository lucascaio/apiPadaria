<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoPedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pedido_id');
            $table->unsignedInteger('produto_id');
            $table->integer('quantidade');
            $table->double('preco_total', 6,2);
            $table->double('preco_unidade', 6,2);
            $table->foreign('produto_id', 'fk_produto_pedido_produto_id')->references('id')->on('produtos');
            $table->foreign('pedido_id', 'fk_produto_pedido_pedido_id')->references('id')->on('pedidos');
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
        Schema::dropIfExists('produto_pedidos');
    }
}
