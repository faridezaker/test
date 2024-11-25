<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->title,
            'body'=>$this->faker->paragraph,
            'price'=>$this->faker->numberBetween(0,200000),
            'image'=>$this->faker->imageUrl($width = 200, $height = 200),
        ];
    }
}
