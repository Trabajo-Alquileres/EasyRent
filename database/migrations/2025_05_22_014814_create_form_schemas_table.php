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
        Schema::create('form_schemas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // slug interno: publicar_propiedad
            $table->string('title');          // título visible: Publicar Propiedad
            $table->text('description')->nullable(); // opcional: para mostrar texto explicativo
            $table->boolean('is_active')->default(true); // permite activar/desactivar formularios
            $table->json('metadata')->nullable(); // JSON con la estructura del formulario
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_schemas');
    }
};
