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
        Schema::create('tb_comics', function (Blueprint $table) {
            $table->increments('id_comic');
            $table->string('nombre_comic');
            $table->string('edicion');
            $table->string('compania');
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
        Schema::dropIfExists('tb_comics');
    }
};
