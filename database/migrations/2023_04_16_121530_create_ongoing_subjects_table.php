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
        Schema::create('ongoing_subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subTitle');
            $table->string('subCode');
            $table->integer('subUnits');
            $table->integer('sem');
            $table->string('subField');
            $table->integer('schId');
            $table->string('subSchool');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ongoing_subjects');
    }
};
