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
        Schema::create('feature_invetories', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('feature_inventory_name');
            $table->text('feature_inventory_description')->nullable();

            $table->foreignUlid('allow_data_type_id')->constrained('allow_data_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_invetories');
    }
};
