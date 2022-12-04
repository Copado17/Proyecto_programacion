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
        Schema::create('tb_pedidos_comics', function (Blueprint $table) {
            $table->increments('id_pedido_comic');
            $table->integer('id_comic')->unsigned()->index()->nullable();
            $table->foreign('id_comic')->references('id_comic')->on('tb_comics');
            $table->integer('id_proveedor')->unsigned()->index()->nullable();
            $table->foreign('id_proveedor')->references('id_proveedor')->on('tb_proveedores');
            $table->integer('cantidad_pedido');
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
        Schema::dropIfExists('tb_pedidos_comics');
    }
};
