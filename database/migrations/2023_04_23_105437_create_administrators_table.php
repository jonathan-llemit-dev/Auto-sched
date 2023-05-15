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
        Schema::create('administrators', function (Blueprint $table) {
            $table->id();
            $table->string('adminFName');
            $table->string('adminMName')->nullable();
            $table->string('adminLName');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('contactNumber')->unique();
            $table->string('region');
            $table->string('regionCode');
            $table->string('city');
            $table->string('cityCode');
            $table->string('barangay');
            $table->string('barangayCode');
            $table->string('street');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrators');
    }
};
