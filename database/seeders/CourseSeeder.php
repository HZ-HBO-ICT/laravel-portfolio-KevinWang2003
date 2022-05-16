<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'CU_code' => 'CU75001',
                'name' => 'Programme and Case Orientation',
                'credits' => '2.5'
            ],
            [
                'CU_code' => 'CU75002V2',
                'name' => 'Computer Science & Basics',
                'credits' => '7.5'
            ],
            [
                'CU_code' => 'CU75003V1',
                'name' => 'Programming Basics',
                'credits' => '5'
            ],
            [
                'CU_code' => 'CU75004V1',
                'name' => 'Object Oriented Programming',
                'credits' => '10'
            ],
            [
                'CU_code' => 'CU75008V1',
                'name' => 'Framework Development 1',
                'credits' => '5'
            ],
            [
                'CU_code' => 'CU75009V3',
                'name' => 'Framework Project 1',
                'credits' => '7.5'
            ],
            [
                'CU_code' => 'CU75009V3',
                'name' => 'Framework Project 2',
                'credits' => '10'
            ],
            [
                'CU_code' => 'Portfolio',
                'name' => 'Portfolio',
                'credits' => '12.5'
            ],
            [
                'CU_code' => 'IT Personality',
                'name' => 'Personality 1',
                'credits' => '1.25'
            ],
            [
                'CU_code' => 'IT Personality',
                'name' => 'Personality 2',
                'credits' => '1.25'
            ]
            ]);
    }
}
