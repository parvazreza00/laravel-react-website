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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('short_title')->nullable();
            $table->string('short_des')->nullable();
            $table->string('thumbnail_image')->nullable();
            $table->text('long_title')->nullable();
            $table->text('long_des')->nullable();
            $table->string('total_duration')->nullable();
            $table->string('total_lecture')->nullable();
            $table->string('total_students')->nullable();
            $table->string('category')->nullable();
            $table->string('skill_label')->nullable();
            $table->string('language')->nullable();
            $table->unsignedTinyInteger('rating')->default(5);
            $table->text('skill_all')->nullable();
            $table->string('video_des')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
