<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "price" => rand(100000, 99000000),
            "img" => $this->faker->imageUrl($width = 200, $height = 200),
            "title" => $this->faker->sentence(),
            "category" => $this->faker->name(),
            "created_at" => date_create()
        ];
    }
}
