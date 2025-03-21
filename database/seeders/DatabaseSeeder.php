<?php
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // First seed the categories
        $this->call(CourseCategorySeeder::class);

        // Then seed the courses that depend on categories
        $this->call(CourseSeeder::class);
    }
}
