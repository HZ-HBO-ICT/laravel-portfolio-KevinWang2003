<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * GradeSeeder.php
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            [
                'course_id' => '1',
                'test_name' => 'Assessment',
                'best_grade' => '9.1',
            ],
            [
                'course_id' => '2',
                'test_name' => 'Written',
                'best_grade' => '8.2',
            ],
            [
                'course_id' => '3',
                'test_name' => 'Case Study Exam',
                'best_grade' => '10.0',
            ],
            [
                'course_id' => '4',
                'test_name' => 'Case Study',
                'best_grade' => '7.0',
            ],
            [
                'course_id' => '4',
                'test_name' => 'Project',
                'best_grade' => '7.8',
            ],
            [
                'course_id' => '5',
                'test_name' => 'Case Study',
                'best_grade' => '9.9',
            ],
            [
                'course_id' => '6',
                'test_name' => 'Project',
                'best_grade' => '7.6',
            ],
            [
                'course_id' => '6',
                'test_name' => 'Assessment',
                'best_grade' => '9.4',
            ],
            [
                'course_id' => '6',
                'test_name' => 'Report',
                'best_grade' => '7.7',
            ],
            [
                'course_id' => '7',
                'test_name' => 'Portfolio',
                'best_grade' => '0',
            ],
            [
                'course_id' => '7',
                'test_name' => 'Project',
                'best_grade' => '0',
            ],
            [
                'course_id' => '7',
                'test_name' => 'Assessment',
                'best_grade' => '0',
            ]
        ]);
    }
}
