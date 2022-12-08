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
        Schema::create('tb_pedidos_individuales', function (Blueprint $table) {
            $table->increments('id_pedido_individual');
            $table->integer('id_pedido')->unsigned()->index()->nullable();
            $table->foreign('id_pedido')->references('id_pedido')->on('tb_pedidos');
            $table->string('nombre_producto');
            $table->string('tipo_pedido');
            $table->integer('cantidad_pedido_individual');
            $table->float('total_pedido_individual');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pedidos_individuales');
    }
};
