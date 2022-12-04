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
        Schema::create('tb_pedidos_articulos', function (Blueprint $table) {
            $table->increments('id_pedido_articulo');
            $table->integer('id_articulo')->unsigned()->index()->nullable();
            $table->foreign('id_articulo')->references('id_articulo')->on('tb_articulos');
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
        Schema::dropIfExists('tb_pedidos_articulos');
    }
};
