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
        Schema::create('tb_articulos', function (Blueprint $table) {
            $table->increments('id_articulo');
            $table->string('nombre_articulo');
            $table->string('tipo');
            $table->string('marca');
            $table->string('descripcion');
            $table->integer('disponibilidad');
            $table->float('precio_venta');
            $table->float('precio_compra');
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
        Schema::dropIfExists('tb_articulos');
    }
};
