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
        Schema::create('tb_ventas', function (Blueprint $table) {
            $table->increments('id_venta');
            $table->string('nombre_cliente');
            $table->string('telefono_cliente');
            $table->string('correo_cliente')->nullable();
            $table->string('nombre_vendedor');
            $table->float('total_venta');
            $table->timestamp('fecha_venta');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_ventas');
    }
};
