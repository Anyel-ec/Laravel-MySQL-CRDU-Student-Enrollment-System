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
        Schema::create('matriculas', function (Blueprint $table) {
            $table->integer('id_matricula')->primary();
            $table->integer('id_estudiante');
            $table->integer('id_materia');
            $table->date('fecha_matricula');

            $table->foreign('id_estudiante')->references('id_estudiante')->on('Estudiante');
            $table->foreign('id_materia')->references('id_materia')->on('Materia');
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};
