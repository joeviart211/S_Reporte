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
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('fuente');
            $table->text('fecha');
            $table->string('n_situacion');
            $table->string('transversalidad',100)->nullable()->unsinged();
            $table->boolean('metadato')->nullable()->default(0);
            $table->boolean('evento')->nullable()->default(0);
            $table->boolean('tema_selecto')->nullable()->default(0);
            $table->string('reseña');
            $table->string('proceso_validacion');
            $table->timestamps();
            $table->text('direccionG');
            $table->text('direccionesWebG');
            $table->text('documentoDG');
            $table->text('DDGname');
            $table->text('DDGmime');
            $table->text('direcciones_diagnostico');
            $table->text('direccionesWebD');
            $table->text('documento_dd');
            $table->text('DDDname');
            $table->text('DDDmime');
            $table->text('direccion_proyecto');
            $table->text('direccion_web_P');
            $table->text('documento_DP');
            $table->text('DDPname');
            $table->text('DDPmime');
            $table->text('direccion_planeacion');
            $table->text('direccion_web_Pl');
            $table->text('documento_P');
            $table->text('DPname');
            $table->text('DPmime');
            $table->text('observaciones');

            $table->text('reporte');
            $table->text('Rname');
            $table->text('Rmime');
            $table->boolean('Alerta')->nullable()->default(0);
            $table->boolean('Comunicado')->nullable()->default(0);
            $table->boolean('Tarjeta_Informativa')->nullable()->default(0);

             $table->foreign('transversalidad')->references('eje')->on('transversalidad')->onUpdate('cascade')->onDelete('set null');
            // $table->foreign('transversalidad')->references('eje')->on('tranansversalidad');
            $table->foreign('user_id')->references('id')->on('users');

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
};
