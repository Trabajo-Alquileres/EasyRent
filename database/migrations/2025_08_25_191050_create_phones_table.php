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
        Schema::create('phones', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('phone_number')->unique();
            $table->string('phone_country_calling_code');
            $table->boolean('phone_verified')->default(false);
            $table->boolean('phone_primary')->default(true);

            $table->ulidMorphs('phoneable'); // genera phoneable_id (ULID) y phoneable_type (string)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phones');
    }
};
