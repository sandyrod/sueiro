<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotizadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizador', function (Blueprint $table) {
            $table->id();
            $table->string('Tipo');
            $table->string('cant_solicitada');
            $table->string('malla_metalica');
            $table->string('ancho_malla');
            $table->string('material');
            $table->string('cant_pack');
            $table->string('vlr_mtr_cuadrado');
            $table->string('redondeo_por_tiras');
            $table->string('redondeo_de_tiras');
            $table->string('de');
            $table->string('nd');
            $table->string('alambre');
            $table->string('modulos');
            $table->string('abertura');
            $table->string('peso_m2');
            $table->string('aa');
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
        Schema::dropIfExists('cotizador');
    }
}
