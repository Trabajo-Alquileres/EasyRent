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
        Schema::create('locations', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->float('latitude');
            $table->float('longitude');
            $table->string('street_name')->nullable();
            $table->string('street_number')->nullable();
            $table->string('address')->nullable();
            $table->string('block_number')->nullable();
            $table->string('lot_number')->nullable();
            $table->string('full_address');
            $table->foreignUlid('city_id')->constrained('cities')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
