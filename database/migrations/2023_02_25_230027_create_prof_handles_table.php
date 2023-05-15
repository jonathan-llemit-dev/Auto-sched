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
        Schema::create('prof_handles', function (Blueprint $table) {
            $table->id();
            $table->integer('profId');
            $table->string('profSchool');
            $table->string('subTitle');
            $table->string('subCode');
            $table->integer('subUnits');
            $table->string('studCourse');
            $table->tinyInteger('studYear');
            $table->string('studSection');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prof_handles');
    }
};
