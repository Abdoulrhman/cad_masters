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
                'description' => 'Learn AutoCAD from basics to advanced techniques',
            ],
            [
                'name'        => '3D Modeling',
                'description' => 'Master 3D modeling and visualization',
            ],
            [
                'name'        => 'BIM',
                'description' => 'Building Information Modeling courses',
            ],
            [
                'name'        => 'Revit',
                'description' => 'Autodesk Revit training for architecture and construction',
            ],
            [
                'name'        => 'Civil 3D',
                'description' => 'Civil engineering and infrastructure design',
            ],
        ];

        foreach ($categories as $category) {
            CourseCategory::create($category);
        }
    }
}
