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
            $table->text('n_situacion');
            $table->string('transversalidad',100)->nullable()->unsinged();
            $table->boolean('metadato')->nullable()->default(0);
            $table->boolean('evento')->nullable()->default(0);
            $table->boolean('tema_selecto')->nullable()->default(0);
            $table->string('reseña');
            $table->string('proceso_validacion');
            $table->timestamps();
            $table->text('direccionG')->nullable();
            $table->text('direccionesWebG')->nullable();
            $table->text('documentoDG')->nullable();
            $table->text('DDGname')->nullable();
            $table->text('DDGmime')->nullable();
            $table->text('direcciones_diagnostico')->nullable();
            $table->text('direccionesWebD')->nullable();
            $table->text('documento_dd')->nullable();
            $table->text('DDDname')->nullable();
            $table->text('DDDmime')->nullable();
            $table->text('direccion_proyecto')->nullable();
            $table->text('direccion_web_P')->nullable();
            $table->text('documento_DP')->nullable();
            $table->text('DDPname')->nullable();
            $table->text('DDPmime')->nullable();
            $table->text('direccion_planeacion')->nullable();
            $table->text('direccion_web_Pl')->nullable();
            $table->text('documento_P')->nullable();
            $table->text('DPname')->nullable();
            $table->text('DPmime')->nullable();
            $table->text('observaciones')->nullable();

            $table->text('reporte');
            $table->text('Rname');
            $table->text('Rmime');
            $table->boolean('Alerta')->nullable()->default(0);
            $table->boolean('Comunicado')->nullable()->default(0);
            $table->boolean('Tarjeta_Informativa')->nullable()->default(0);

             $table->foreign('transversalidad')->references('eje')->on('transversalidad');
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
