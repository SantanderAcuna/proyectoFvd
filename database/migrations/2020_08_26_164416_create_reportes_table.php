<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('documento');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('numero')->unique();
            $table->string('iccid');
            $table->string('valor');
            $table->bigInteger('operador_id')->unsigned();
            $table->bigInteger('tipo_venta_id')->unsigned();
            $table->bigInteger('producto_id')->unsigned();
            $table->bigInteger('revenue_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('operador_id')->references('id')->on('operadors');
            $table->foreign('tipo_venta_id')->references('id')->on('tipo_ventas');
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('revenue_id')->references('id')->on('revenues');
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
        Schema::dropIfExists('reportes');
    }
}
