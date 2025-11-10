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
        Schema::table('users', function (Blueprint $table) {
            $table->string('mobile_no')->after('email')->nullable();
            $table->integer('role_type')->after('mobile_no')->nullable();
            $table->integer('user_id')->after('email_verified_at')->nullable();
            $table->integer('status')->after('remember_token')->default(1);
            $table->integer('cBy')->nullable();
            $table->integer('dBy')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
