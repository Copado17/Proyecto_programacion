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
        Schema::create('tb_ventas_individuales', function (Blueprint $table) {
            $table->increments('id_venta_individual');
            $table->integer('id_venta')->unsigned()->index()->nullable();
            $table->foreign('id_venta')->references('id_venta')->on('tb_ventas');
            $table->integer('id_inventario')->unsigned()->index()->nullable();
            $table->foreign('id_inventario')->references('id_inventario')->on('tb_inventario');
            $table->string('tipo_venta_individual');
            $table->integer('cantidad_venta_individual');
            $table->float('total_venta_individual');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_ventas_individuales');
    }
};
