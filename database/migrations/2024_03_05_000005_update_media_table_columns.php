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
        Schema::table('media', function (Blueprint $table) {
            // Rename 'image' column to 'file_path' if it exists
            if (Schema::hasColumn('media', 'image')) {
                $table->renameColumn('image', 'file_path');
            }

            // Add mime_type column if it doesn't exist
            if (! Schema::hasColumn('media', 'mime_type')) {
                $table->string('mime_type')->nullable()->after('file_path');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('media', function (Blueprint $table) {
            if (Schema::hasColumn('media', 'file_path')) {
                $table->renameColumn('file_path', 'image');
            }

            if (Schema::hasColumn('media', 'mime_type')) {
                $table->dropColumn('mime_type');
            }
        });
    }
};
