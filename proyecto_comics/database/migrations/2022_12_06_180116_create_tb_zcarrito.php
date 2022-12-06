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
            $table->integer('id_inventario')->unsigned()->index()->nullable();
            $table->foreign('id_inventario')->references('id_inventario')->on('tb_inventario');
            $table->string('nombre_producto');
            $table->integer('cantidad');
            $table->float('valor');
            $table->float('total');

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
