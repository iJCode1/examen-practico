<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tblcontrolcarga', function (Blueprint $table) {
            $table->increments('id_control_carga');
            $table->integer('id_usuario')->unsigned();
            $table->integer('anio')->unsigned();
            $table->integer('total')->unsigned();

            $table->foreign('id_usuario')->references('id_usuario')->on('tblusuarios');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblcontrolcarga');
    }
};
