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
        Schema::table('contents', function (Blueprint $table) {
            $table->text('about_framwork_image_text1')->after('about_framwork_image1')->nullable();
            $table->text('about_framwork_image_text2')->after('about_framwork_image2')->nullable();
            $table->text('about_framwork_image_text3')->after('about_framwork_image3')->nullable();
            $table->text('about_framwork_image_text4')->after('about_framwork_image4')->nullable();
            $table->text('about_framwork_image_text5')->after('about_framwork_image5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contents', function (Blueprint $table) {
            //
        });
    }
};
