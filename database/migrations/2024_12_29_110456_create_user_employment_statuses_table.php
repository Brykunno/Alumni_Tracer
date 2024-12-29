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
        Schema::create('user_employment_statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employment_status_ID')->constrained('employment_statuses')->onDelete('cascade'); 
            $table->foreignId('user_ID')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_employment_statuses');
    }
};