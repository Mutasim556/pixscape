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
        Schema::create('homepage_videos', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->text('video_link')->nullable();
            $table->boolean('status')->default(1)->nullable();
            $table->boolean('delete')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepage_videos');
    }
};
