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
            if (! Schema::hasColumn('courses', 'daysInWeek')) {
                $table->string('daysInWeek')->nullable()->after('hours');
            }
        });
        // Schema::create('course_instructor', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('course_id')->constrained()->onDelete('cascade');
        //     $table->foreignId('instructor_id')->constrained()->onDelete('cascade');
        //     $table->timestamps();
        // });
        if (! Schema::hasTable('certificate_course')) {
            Schema::create('certificate_course', function (Blueprint $table) {
                $table->id();
                $table->foreignId('course_id')->constrained()->onDelete('cascade');
                $table->foreignId('certificate_id')->constrained()->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            //
        });
    }
};
