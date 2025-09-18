<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::factory()->create([
            'title' => 'Sample Course',
            'description' => 'Can tab in and out of this markdown editor.',
            'syllabus' => 'Can tab in but not out of this markdown editor',
            'notes' => 'Can not tab into, but can tab out of this markdown editor',
        ]);
    }
}
