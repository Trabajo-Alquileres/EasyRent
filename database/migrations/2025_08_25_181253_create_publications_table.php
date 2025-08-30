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
        Schema::create('publications', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('publication_title');
            $table->longText('publication_description');
            $table->float('publication_price');
            $table->string('publication_floor_number')->nullable();
            $table->string('publication_department_number')->nullable();

            $table->foreignUlid('property_id')->constrained('properties')->onDelete('cascade');
            $table->foreignUlid('publication_group_id')->constrained('publication_groups')->onDelete('cascade');
            $table->foreignUlid('property_sub_type_id')->constrained('property_sub_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
