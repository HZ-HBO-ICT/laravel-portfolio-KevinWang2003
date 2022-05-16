<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CU_code' => $this->faker->title,
            'name' => $this->faker->title,
            'credits' => $this->faker->randomNumber(1.25, 10),
        ];
    }
}
