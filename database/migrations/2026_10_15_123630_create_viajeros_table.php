<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('viajeros', function (Blueprint $table) {
            $table->id();
            $table->foreignId('persona_id')->constrained('personas')->onDelete('cascade'); // Relación con Persona
            $table->string('destino', 100);              // Obligatorio, máximo 100 caracteres
            $table->string('tipo_viaje', 50)->nullable();  // Opcional, máximo 50 caracteres
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('viajeros');
    }
};