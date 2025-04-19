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
        Schema::table('courses', function (Blueprint $table) {
            // Drop the existing foreign key constraint
            $table->dropForeign(['instructor_id']);
            // Drop the column
            $table->dropColumn('instructor_id');
        });

        Schema::table('courses', function (Blueprint $table) {
            // Recreate the column as nullable
            $table->foreignId('instructor_id')->nullable()->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            // Drop the existing foreign key constraint
            $table->dropForeign(['instructor_id']);
            // Drop the column
            $table->dropColumn('instructor_id');
        });

        Schema::table('courses', function (Blueprint $table) {
            // Recreate the column as non-nullable
            $table->foreignId('instructor_id')->constrained('users');
        });
    }
};
