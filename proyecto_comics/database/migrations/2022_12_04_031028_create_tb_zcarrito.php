<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_carrito', function (Blueprint $table) {
            $table->increments('id_carrito');
            $table->integer('id_comic')->unsigned()->index()->nullable();
            $table->foreign('id_comic')->references('id_comic')->on('tb_comics');
            $table->integer('id_articulo')->unsigned()->index()->nullable();
            $table->foreign('id_articulo')->references('id_articulo')->on('tb_articulos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_carrito');
    }
};
