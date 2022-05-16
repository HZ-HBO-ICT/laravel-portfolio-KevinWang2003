<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_id' => Course::factory()->create(),
            'test_name' => $this->faker->title,
            'best_grade' => $this->faker->numberBetween(0, 10),
        ];
    }
}
