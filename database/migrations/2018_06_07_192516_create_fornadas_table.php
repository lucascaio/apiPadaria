<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFornadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornadas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('data_inicio')->nullable();
            $table->timestamp('data_fim')->nullable();
            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('fornadas');
    }
}
