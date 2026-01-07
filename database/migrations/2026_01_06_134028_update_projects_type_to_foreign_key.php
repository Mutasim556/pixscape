<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {

            // If 'type' already exists and is string/int
            $table->unsignedBigInteger('project_type_id')->nullable()->after('type');

            $table->foreign('project_type_id')
                  ->references('id')
                  ->on('project_types')
                  ->onDelete('cascade');

            $table->dropColumn('type');
        });
    }

    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('type')->nullable();
            $table->dropForeign(['project_type_id']);
            $table->dropColumn('project_type_id');
        });
    }
};
