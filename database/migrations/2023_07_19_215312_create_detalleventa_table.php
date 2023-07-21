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
        Schema::create('detalleventa', function (Blueprint $table) {
            $table->id();
            $table->string('idventa',50);
            $table->string('codigoproducto',50);
            $table->string('precio_venta',50);
            $table->string('descripcion_producto',50);
            $table->$table->foreign('idventa')->references('idventa')->on('venta')->onDelete('cascade');
            $table->$table->foreign('codigoproducto')->references('codigoproducto')->on('producto')->onDelete('cascade');
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
        Schema::dropIfExists('detalleventa');
    }
};
