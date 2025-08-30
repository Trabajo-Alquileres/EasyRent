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
        Schema::create('publication_users', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->datetime('starting_date')->nullable();
            $table->datetime('ending_date')->nullable();

            $table->foreignUlid('publication_id')->constrained('publications')->onDelete('cascade');
            $table->foreignUlid('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignUlid('publication_role_id')->constrained('publication_roles')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publication_users');
    }
};
