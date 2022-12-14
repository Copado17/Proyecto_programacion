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
        Schema::create('tb_pedidos', function (Blueprint $table) {
            $table->increments('id_pedido');
            $table->integer('id_proveedor')->unsigned()->index()->nullable();
            $table->foreign('id_proveedor')->references('id_proveedor')->on('tb_proveedores');
            $table->integer('numero_pedidos');
            $table->float('total_pedido');
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
        Schema::dropIfExists('tb_pedidos');
    }
};
