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
            $table->unsignedInteger('user_id');
            $table->timestamp('data_validade')->nullable();
            $table->timestamp('data_fabricacao')->nullable();
            $table->decimal('peso')->nullable();
            $table->timestamps();
            $table->unsignedInteger('tipo_id');

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
