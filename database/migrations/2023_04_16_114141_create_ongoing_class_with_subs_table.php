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
        Schema::create('ongoing_class_with_subs', function (Blueprint $table) {
            $table->id();
            $table->string('course');
            $table->string('year');
            $table->string('section');
            $table->string('subject_code');
            $table->string('subject_title');
            $table->integer('subject_units');
            $table->integer('sem');
            $table->integer('schId');
            $table->string('schName');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ongoing_class_with_subs');
    }
};
