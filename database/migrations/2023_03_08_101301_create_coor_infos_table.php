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
        Schema::create('coor_infos', function (Blueprint $table) {
            $table->id();
            $table->string('coorFName');
            $table->string('coorLName');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('contactNumber')->unique();
            $table->string('coorDept')->nullable();
            $table->string('coorSchool')->nullable();
            $table->integer('coorAdminId')->nullable();
            $table->string('password');
            $table->text('coorPic')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coor_infos');
    }
};
