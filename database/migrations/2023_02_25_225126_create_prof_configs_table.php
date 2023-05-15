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
        Schema::create('prof_configs', function (Blueprint $table) {
            $table->id();
            $table->integer('profId')->nullable();
            $table->string('employment')->nullable();
            $table->string('mode')->nullable();
            $table->integer('loadUnit')->nullable();
            $table->time('prefTimeStartSun')->nullable();
            $table->time('prefTimeEndSun')->nullable();
            $table->string('prefModeSun')->nullable();
            $table->time('prefTimeStartMon')->nullable();
            $table->time('prefTimeEndMon')->nullable();
            $table->string('prefModeMon')->nullable();
            $table->time('prefTimeStartTue')->nullable();
            $table->time('prefTimeEndTue')->nullable();
            $table->string('prefModeTue')->nullable();
            $table->time('prefTimeStartWed')->nullable();
            $table->time('prefTimeEndWed')->nullable();
            $table->string('prefModeWed')->nullable();
            $table->time('prefTimeStartThu')->nullable();
            $table->time('prefTimeEndThu')->nullable();
            $table->string('prefModeThu')->nullable();
            $table->time('prefTimeStartFri')->nullable();
            $table->time('prefTimeEndFri')->nullable();
            $table->string('prefModeFri')->nullable();
            $table->time('prefTimeStartSat')->nullable();
            $table->time('prefTimeEndSat')->nullable();
            $table->string('prefModeSat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prof_configs');
    }
};
