<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Ejecutar la migración.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); // Campo para el nombre del producto
            $table->decimal('precio', 8, 2); // Precio con dos decimales
            $table->text('descripcion')->nullable(); // Descripción opcional
            $table->timestamps(); // Campos de fecha de creación y actualización
        });
    }

    /**
     * Revertir la migración.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
