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
        Schema::create('publication_tenant_type', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('publication_id')->constrained()->onDelete('cascade');
            $table->foreignUlid('tenant_type_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publication_tenant_type');
    }
};
