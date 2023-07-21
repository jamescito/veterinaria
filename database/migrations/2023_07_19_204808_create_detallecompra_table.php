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
        Schema::create('detallecompra', function (Blueprint $table) {
            $table->id();
            $table->string('idcompra',50);
            $table->string('codigoproducto',50);
            $table->string('precio_compra',50);
            $table->string('descripcion_producto',50);
            $table->foreign('idcompra')->references('idcompra')->on('compra')->onDelete('cascade');
            $table->foreign('codigoproducto')->references('codigoproducto')->on('producto')->onDelete('cascade');
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
        Schema::dropIfExists('detallecompra');
    }
};
