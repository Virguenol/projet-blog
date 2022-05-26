<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => rand(1, 10),
            'user_id' => rand(1, 5),
            'tag_id' => rand(1, 3),
            'title' => $this->faker->sentence,
            'slug' => $this->faker->sentence,
            'content' => $this->faker->paragraph
        ];
    }
}
