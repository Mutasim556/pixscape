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
        Schema::table('logos', function (Blueprint $table) {
            $table->string('main_site_logo2')->after('main_site_footer_logo')->nullable();
            $table->string('main_site_logo3')->after('main_site_logo2')->nullable();
            $table->string('main_site_logo4')->after('main_site_logo3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('logos', function (Blueprint $table) {
            //
        });
    }
};
