<?php
namespace Database\Seeders;

use App\Models\Instructor;
use Illuminate\Database\Seeder;

class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instructors = [
            [
                'name'  => 'Guy Clarke',
                'title' => 'AutoCAD Specialist',
            ],
            [
                'name'  => 'Aspen Whitaker',
                'title' => 'SketchUp Expert',
            ],
            [
                'name'  => 'John Smith',
                'title' => '3D Modeling Expert',
            ],
            [
                'name'  => 'Sarah Johnson',
                'title' => 'Architecture Specialist',
            ],
        ];

        foreach ($instructors as $instructor) {
            Instructor::create($instructor);
        }
    }
}
