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
        Schema::create('tblsolicitudes', function (Blueprint $table) {
            $table->increments('id_solicitud');
            $table->integer('id_usuario_asignado')->unsigned();
            $table->string('nombre_solicitante', 100);
            $table->string('paterno_solicitante', 100);
            $table->string('materno_solicitante', 100);
            $table->integer('activo');
            $table->timestamp('fecha_solicitud');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblsolicitudes');
    }
};
