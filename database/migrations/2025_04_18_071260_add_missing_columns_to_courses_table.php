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
            if (Schema::hasColumn('courses', 'name')) {
                $table->renameColumn('title', 'name');
            }
            if (! Schema::hasColumn('courses', 'image')) {
                $table->string('image')->nullable()->after('name');
            }
            if (Schema::hasColumn('courses', 'category_id')) {
                $table->dropColumn('category_id');
            }
            if (! Schema::hasColumn('courses', 'price_offer')) {
                $table->decimal('price_offer', 10, 2)->nullable()->after('price');
            }
            if (! Schema::hasColumn('courses', 'branch')) {
                $table->string('branch')->nullable()->after('price_offer');
            }
            if (! Schema::hasColumn('courses', 'hours')) {
                $table->integer('hours')->nullable()->after('branch');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            if (Schema::hasColumn('courses', 'name')) {
                $table->renameColumn('name', 'title');
            }
            $columns = ['image', 'price_offer', 'branch', 'hours'];
            foreach ($columns as $column) {
                if (Schema::hasColumn('courses', $column)) {
                    $table->dropColumn($column);
                }
            }
            if (!Schema::hasColumn('courses', 'category_id')) {
                $table->foreignId('category_id')->nullable()->after('description');
            }
        });
    }
};
