<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('empleado_id'); // Relación con empleados
            $table->date('fecha'); // Fecha de asistencia
            $table->time('hora_entrada')->nullable(); // Hora de entrada
            $table->time('hora_salida')->nullable(); // Hora de salida
            $table->timestamps();

            $table->foreign('empleado_id')->references('id')->on('empleados')->onDelete('cascade'); // Llave foránea
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('asistencias');
    }
};
