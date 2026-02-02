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
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->text('home_counter_title')->nullable();
            $table->text('home_counter_short_details')->nullable();
            $table->text('home_counter_btn_text')->nullable();

            $table->text('home_work_title')->nullable();
            $table->text('home_work_short_details')->nullable();
            $table->text('home_work_btn_text')->nullable();
            $table->text('home_work_current_text')->nullable();

            $table->text('home_work_contact_text')->nullable();

            $table->text('about_title')->nullable();
            $table->text('about_service_title')->nullable();
            $table->text('about_service_short_details')->nullable();
            $table->text('about_framwork_title')->nullable();
            $table->text('about_framwork_details1')->nullable();
            $table->text('about_framwork_details2')->nullable();
            $table->text('about_framwork_details3')->nullable();
            $table->text('about_framwork_details4')->nullable();
            $table->text('about_framwork_image1')->nullable();
            $table->text('about_framwork_image2')->nullable();
            $table->text('about_framwork_image3')->nullable();
            $table->text('about_framwork_image4')->nullable();
            $table->text('about_framwork_image5')->nullable();


            $table->text('about_oframework_title')->nullable();
            $table->text('about_oframwork_image')->nullable();
            $table->text('about_oframework_short_details')->nullable();

            $table->text('about_client_title')->nullable();
            $table->text('about_values_title')->nullable();

            $table->text('about_app_title')->nullable();
            $table->text('about_app_short_details')->nullable();
            $table->text('about_app_btn_text')->nullable();

            $table->text('about_career_headline')->nullable();
            $table->text('about_career_title')->nullable();
            $table->text('about_career_short_details')->nullable();
            $table->text('about_career_btn_text')->nullable();


            $table->text('team_title')->nullable();
            $table->text('team_career_headline')->nullable();
            $table->text('team_career_title')->nullable();
            $table->text('team_career_short_details')->nullable();
            $table->text('team_career_btn_text')->nullable();


            $table->text('footer_subscribe_text')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contents');
    }
};
