<?php
namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Course;
use App\Models\CourseCategory;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get categories
        $autocadCategory      = CourseCategory::where('name', 'AutoCAD')->first();
        $sketchupCategory     = CourseCategory::where('name', 'SketchUp')->first();
        $modelingCategory     = CourseCategory::where('name', '3D Modeling')->first();
        $architectureCategory = CourseCategory::where('name', 'Architecture')->first();

        // Create a default branch if none exists
        $branch = Branch::firstOrCreate(
            ['name' => 'Main Branch'],
            [
                'address' => '123 Main St',
                'phone'   => '555-1234',
                'email'   => 'main@example.com',
            ]
        );

        $courses = [
            [
                'name'         => 'AutoCAD 2D Professional',
                'description'  => 'Learn the basics of AutoCAD, including 2D drawing, editing, and annotation tools.',
                'price'        => 197.00,
                'price_offer'  => 26.00,
                'branch_id'    => $branch->id,
                'hours'        => 11,
                'is_active'    => true,
                'max_students' => 20,
                'categories'   => [$autocadCategory->id],
            ],
            [
                'name'         => 'AutoCAD 2D Advanced',
                'description'  => 'About Course SketchUp is a powerful free graphics modeling program',
                'price'        => 9000.00,
                'price_offer'  => 8000.00,
                'branch_id'    => $branch->id,
                'hours'        => 9,
                'is_active'    => true,
                'max_students' => 15,
                'categories'   => [$sketchupCategory->id],
            ],
            [
                'name'         => '3D Studio Max Essential Training',
                'description'  => 'Master 3D modeling, texturing, lighting, and rendering in 3ds Max.',
                'price'        => 399.99,
                'price_offer'  => 350.00,
                'branch_id'    => $branch->id,
                'hours'        => 60,
                'is_active'    => true,
                'max_students' => 12,
                'categories'   => [$modelingCategory->id],
            ],
            [
                'name'         => 'Architecture Fundamentals',
                'description'  => 'Comprehensive training in architecture design fundamentals.',
                'price'        => 499.99,
                'price_offer'  => 450.00,
                'branch_id'    => $branch->id,
                'hours'        => 80,
                'is_active'    => true,
                'max_students' => 18,
                'categories'   => [$architectureCategory->id],
            ],
        ];

        foreach ($courses as $courseData) {
            $categories = $courseData['categories'];
            unset($courseData['categories']);
            $course = Course::create($courseData);
            $course->categories()->attach($categories);
        }
    }
}
