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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('short_details')->nullable();
            $table->text('details')->nullable();
            $table->text('challenges')->nullable();
            $table->text('solution')->nullable();
            $table->text('value')->nullable();
            $table->text('option_value')->nullable();
            $table->boolean('has_team')->default(0);
            $table->text('team_members')->nullable();
            $table->text('images')->nullable();
            $table->string('video')->nullable();
            $table->string('type')->nullable();
            $table->customDefaults();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
