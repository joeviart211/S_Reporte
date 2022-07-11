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
            $table->date('fecha');
            $table->string('n_situacion');
            $table->foreignId('transversalidad');
            $table->boolean('metadato')->nullable()->default(0);
            $table->boolean('evento')->nullable()->default(0);
            $table->boolean('tema_selecto')->nullable()->default(0);
            $table->string('reseña');
            $table->string('proceso_validacion');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('transversalidad')->references('id')->on('transversalidad')->onUpdate('cascade')->onDelete('set null');

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
