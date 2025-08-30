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
        Schema::create('phone_type_usages', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('phone_id')->constrained('phones')->onDelete('cascade');
            $table->foreignUlid('phone_usage_type_id')->constrained('phone_usage_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phone_type_usages');
    }
};
