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
        Schema::create('unique_visitors', function (Blueprint $table) {
            $table->id();
            $table->string('visitor_hash')->unique(); // cookie value (hashed)
            $table->string('ip')->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamp('last_seen')->nullable(); // optional for analytics
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unique_visitors');
    }
};
