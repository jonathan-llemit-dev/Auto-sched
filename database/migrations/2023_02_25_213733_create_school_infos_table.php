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
        Schema::create('school_infos', function (Blueprint $table) {

            $table->id();
            $table->string('schName')->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('contactNumber')->unique()->nullable();
            $table->string('region')->nullable();
            $table->string('regionCode')->nullable();
            $table->string('city')->nullable();
            $table->string('cityCode')->nullable();
            $table->string('barangay')->nullable();
            $table->string('barangayCode')->nullable();
            $table->string('street')->nullable();
            $table->string('coordinatorId');
            $table->text('schLogo')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_infos');
    }
};
