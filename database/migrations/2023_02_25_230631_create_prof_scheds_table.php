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
        Schema::create('prof_scheds', function (Blueprint $table) {
            $table->id();
            $table->integer('profId');
            $table->string('profName');
            $table->string('profSchool');
            $table->string('subCode');
            $table->string('schedDay');
            $table->time('startTime');
            $table->time('endTime');
            $table->string('studCourse');
            $table->tinyInteger('studYear');
            $table->string('studSection');
            $table->string('sem');
            $table->integer('totalHours');
            $table->string('classroom');
            $table->string('sy');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prof_scheds');
    }
};
