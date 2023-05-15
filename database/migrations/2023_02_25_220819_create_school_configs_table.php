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
        Schema::create('school_configs', function (Blueprint $table) {
            $table->id();
            $table->string('coordinatorId');
            $table->integer('schId')->nullable();
            $table->string('schName')->nullable();
            $table->string('mode')->nullable();
            $table->integer('sem')->nullable();
            $table->integer('autoRoom')->nullable();
            $table->string('allocationWay')->nullable();
            $table->time('schTimeStartSun')->nullable();
            $table->time('schTimeEndSun')->nullable();
            $table->time('schTimeStartMon')->nullable();
            $table->time('schTimeEndMon')->nullable();
            $table->time('schTimeStartTue')->nullable();
            $table->time('schTimeEndTue')->nullable();
            $table->time('schTimeStartWed')->nullable();
            $table->time('schTimeEndWed')->nullable();
            $table->time('schTimeStartThu')->nullable();
            $table->time('schTimeEndThu')->nullable();
            $table->time('schTimeStartFri')->nullable();
            $table->time('schTimeEndFri')->nullable();
            $table->time('schTimeStartSat')->nullable();
            $table->time('schTimeEndSat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_configs');
    }
};
