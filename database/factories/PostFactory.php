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
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3, 5)),
            'category_id' => $this->faker->numberBetween(1, 4),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->text(mt_rand(100, 200)),
            'body' => $this->faker->paragraphs(mt_rand(3, 10), true),
            'image' => $this->faker->imageUrl(),
            // 'published_at' => $this->faker->date('Y-m-d'),
        ];
    }
}
