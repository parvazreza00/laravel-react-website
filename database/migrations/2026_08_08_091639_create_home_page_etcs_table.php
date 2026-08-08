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
        Schema::create('home_page_etcs', function (Blueprint $table) {
            $table->id();
            $table->string('home_title')->nullable();
            $table->string('home_subtitle')->nullable();
            $table->string('tec_des')->nullable();
            $table->string('total_student')->nullable();
            $table->string('total_course')->nullable();
            $table->string('total_review')->nullable();
            $table->string('video_des')->nullable();
            $table->string('video_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_etcs');
    }
};
