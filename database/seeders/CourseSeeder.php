<?php
namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a default instructor if none exists
        $instructor = User::firstOrCreate(
            ['email' => 'instructor@example.com'],
            [
                'name'     => 'Default Instructor',
                'password' => bcrypt('password'),
                'role'     => 'instructor',
            ]
        );

        $courses = [
            [
                'title'         => 'AutoCAD Fundamentals',
                'description'   => 'Learn the basics of AutoCAD, including 2D drawing, editing, and annotation tools.',
                'duration'      => '40 hours',
                'price'         => 299.99,
                'is_active'     => true,
                'start_date'    => '2025-04-24 09:00:00',
                'end_date'      => '2025-05-24 17:00:00',
                'max_students'  => 20,
                'instructor_id' => $instructor->id,
            ],
            [
                'title'         => '3D Studio Max Essential Training',
                'description'   => 'Master 3D modeling, texturing, lighting, and rendering in 3ds Max.',
                'duration'      => '60 hours',
                'price'         => 399.99,
                'is_active'     => true,
                'start_date'    => '2025-05-01 09:00:00',
                'end_date'      => '2025-06-15 17:00:00',
                'max_students'  => 15,
                'instructor_id' => $instructor->id,
            ],
            [
                'title'         => 'Revit Architecture Complete',
                'description'   => 'Comprehensive training in Revit for architectural design and BIM workflows.',
                'duration'      => '80 hours',
                'price'         => 499.99,
                'is_active'     => true,
                'start_date'    => '2025-05-15 09:00:00',
                'end_date'      => '2025-07-15 17:00:00',
                'max_students'  => 18,
                'instructor_id' => $instructor->id,
            ],
            [
                'title'         => 'Civil 3D for Infrastructure Design',
                'description'   => 'Learn Civil 3D for infrastructure and civil engineering projects.',
                'duration'      => '70 hours',
                'price'         => 449.99,
                'is_active'     => true,
                'start_date'    => '2025-06-01 09:00:00',
                'end_date'      => '2025-07-30 17:00:00',
                'max_students'  => 16,
                'instructor_id' => $instructor->id,
            ],
            [
                'title'         => 'BIM Project Management',
                'description'   => 'Master BIM project coordination, clash detection, and team collaboration.',
                'duration'      => '90 hours',
                'price'         => 599.99,
                'is_active'     => true,
                'start_date'    => '2025-06-15 09:00:00',
                'end_date'      => '2025-08-15 17:00:00',
                'max_students'  => 12,
                'instructor_id' => $instructor->id,
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
