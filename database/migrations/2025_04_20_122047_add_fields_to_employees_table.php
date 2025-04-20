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
        Schema::table('employees', function (Blueprint $table) {
            if (! Schema::hasColumn('employees', 'email')) {
                $table->string('email')->unique();
            }
            if (! Schema::hasColumn('employees', 'phone')) {
                $table->string('phone');
            }
            if (! Schema::hasColumn('employees', 'position')) {
                $table->string('position');
            }
            if (! Schema::hasColumn('employees', 'image')) {
                $table->string('image')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn(['email', 'phone', 'position', 'image']);
        });
    }
};
