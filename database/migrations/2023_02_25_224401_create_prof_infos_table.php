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
        Schema::create('prof_infos', function (Blueprint $table) {
            $table->id();
            $table->string('profFName');
            $table->string('profLName');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('contactNumber')->unique();
            $table->string('profDept')->nullable();
            $table->string('profField')->nullable();
            $table->string('profSchool')->nullable();
            $table->string('password');
            $table->text('profPic')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prof_infos');
    }
};
