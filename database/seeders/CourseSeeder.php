<?php
namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'name'          => 'AutoCAD Fundamentals',
                'price'         => 299.99,
                'price_offer'   => 249.99,
                'schedule_time' => '09:00:00',
                'hours'         => '40',
                'branch'        => 'Main Campus',
                'image'         => 'courses/autocad-fundamentals.jpg',
                'description'   => 'Learn the basics of AutoCAD, including 2D drawing, editing, and annotation tools.',
                'category_id'   => 1, // AutoCAD category
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'name'          => '3D Studio Max Essential Training',
                'price'         => 399.99,
                'price_offer'   => 349.99,
                'schedule_time' => '14:00:00',
                'hours'         => '60',
                'branch'        => 'Design Center',
                'image'         => 'courses/3ds-max-essential.jpg',
                'description'   => 'Master 3D modeling, texturing, and rendering with 3ds Max.',
                'category_id'   => 2, // 3D Modeling category
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'name'          => 'Revit Architecture Complete',
                'price'         => 499.99,
                'price_offer'   => 449.99,
                'schedule_time' => '10:00:00',
                'hours'         => '80',
                'branch'        => 'BIM Center',
                'image'         => 'courses/revit-architecture.jpg',
                'description'   => 'Comprehensive BIM course covering Revit Architecture from basics to advanced concepts.',
                'category_id'   => 3, // BIM category
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'name'          => 'Civil 3D for Infrastructure Design',
                'price'         => 449.99,
                'price_offer'   => 399.99,
                'schedule_time' => '13:00:00',
                'hours'         => '60',
                'branch'        => 'Engineering Hub',
                'image'         => 'courses/civil-3d.jpg',
                'description'   => 'Learn to design infrastructure projects using AutoCAD Civil 3D.',
                'category_id'   => 4, // Civil Engineering category
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'name'          => 'SolidWorks Professional',
                'price'         => 399.99,
                'price_offer'   => 349.99,
                'schedule_time' => '15:00:00',
                'hours'         => '50',
                'branch'        => 'Mechanical Lab',
                'image'         => 'courses/solidworks.jpg',
                'description'   => 'Professional-level mechanical design course using SolidWorks.',
                'category_id'   => 5, // Mechanical Design category
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
        ];

        DB::table('courses')->insert($courses);
    }
}
