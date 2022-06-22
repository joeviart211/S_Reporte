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
        Schema::create('detalles', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->text('direccionG');
            $table->text('direccionesWebG');
            $table->binary('documentoDG');
            $table->text('DDGname');
            $table->text('DDGmime');
            $table->text('direcciones_diagnostico');
            $table->text('direccionesWebD');
            $table->binary('documento_dd');
            $table->text('DDDname');
            $table->text('DDDmime');
            $table->text('direccion_proyecto');
            $table->text('direccion_web_P');
            $table->binary('documento_DP');
            $table->text('DDPname');
            $table->text('DDPmime');
            $table->text('direccion_planeacion');
            $table->text('direccion_web_Pl');
            $table->binary('documento_P');
            $table->text('DPname');
            $table->text('DPmime');
            $table->text('observaciones');
            $table->text('tipo');
            $table->binary('reporte');
            $table->text('Rname');
            $table->text('Rmime');

            $table->timestamps();
            $table->foreign('id')->references('id')->on('reportes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles');
    }
};
