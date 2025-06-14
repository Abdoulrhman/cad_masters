<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('course_sessions', function (Blueprint $table) {
            $table->foreignId('branch_id')->nullable()->constrained('branches');
        });
    }

    public function down()
    {
        Schema::table('course_sessions', function (Blueprint $table) {
            $table->dropForeign(['branch_id']);
            $table->dropColumn('branch_id');
        });
    }
};
