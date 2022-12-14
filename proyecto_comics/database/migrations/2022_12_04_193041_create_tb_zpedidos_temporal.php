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
        Schema::create('tb_pedidos_temp', function (Blueprint $table) {
            $table->increments('id_pedido_temp');
            $table->integer('id_proveedor')->unsigned()->index()->nullable();
            $table->foreign('id_proveedor')->references('id_proveedor')->on('tb_proveedores');
            $table->integer('id_inventario')->unsigned()->index()->nullable();
            $table->foreign('id_inventario')->references('id_inventario')->on('tb_inventario');
            $table->string('nombre_producto');
            $table->integer('cantidad_pedido');
            $table->float('compra');
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
        Schema::dropIfExists('tb_pedidos');
    }
};
