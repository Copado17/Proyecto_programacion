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
            $table->timestamp('fecha_venta');
            $table->string('descripcion_venta');
            $table->integer('id_vendedor')->unsigned()->index()->nullable();
            $table->foreign('id_vendedor')->references('id_usuario')->on('tb_usuarios');
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
        Schema::dropIfExists('tb_ventas');
    }
};
