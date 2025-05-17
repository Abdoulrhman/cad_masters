<?php
namespace Database\Seeders;

use App\Models\CourseCategory;
use Illuminate\Database\Seeder;

class CourseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name'        => 'AutoCAD',
                'description' => 'AutoCAD related courses',
            ],
            [
                'name'        => 'SketchUp',
                'description' => 'SketchUp related courses',
            ],
            [
                'name'        => '3D Modeling',
                'description' => '3D Modeling courses',
            ],
            [
                'name'        => 'Architecture',
                'description' => 'Architecture related courses',
            ],
        ];

        foreach ($categories as $category) {
            CourseCategory::create($category);
        }
    }
}
