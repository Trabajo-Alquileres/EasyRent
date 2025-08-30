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
        Schema::create('feature_invetory_publications', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('feature_invetory_publication_value');

            $table->foreignUlid('feature_invetory_id')->constrained('feature_invetories')->onDelete('cascade');
            $table->foreignUlid('publication_id')->constrained('publications')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_invetory_publications');
    }
};
