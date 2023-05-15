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
        Schema::create('all_class', function (Blueprint $table) {
            $table->id();
            $table->string('course');
            $table->string('year');
            $table->string('section');
            $table->integer('schId');
            $table->string('schName');
            $table->string('hasSched')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_class');
    }
};
