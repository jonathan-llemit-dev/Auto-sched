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
        Schema::create('stud_classes', function (Blueprint $table) {
            $table->id();
            $table->string('studCourse');
            $table->tinyInteger('studYear');
            $table->string('studSection');
            $table->string('firstSemSub');
            $table->string('secondSemSub');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stud_classes');
    }
};
