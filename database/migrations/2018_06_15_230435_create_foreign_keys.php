<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_produto_user_id')->references('id')->on('users');
            $table->foreign('tipo_id', 'fk_tipo_id')->references('id')->on('tipos');
        });

        Schema::table('pedidos', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_pedido_user_id')->references('id')->on('users');
        });

        Schema::table('fornadas', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_fornada_user_id')->references('id')->on('users');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
