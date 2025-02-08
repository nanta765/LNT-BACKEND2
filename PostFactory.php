<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
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
    public function definition(): array
    {
        return [
            'title'=> fake()->sentence(6), //Membuat 6 kata
            'author_id'=> User::factory(), //---> Membuat author id dan user secara bersamaan
            'category_id'=> Category::factory(), //---> Membuat category id dan category secara bersamaan
            'slug'=> Str::slug(fake()->sentence()),
            'body'=> fake()->paragraphs(5, true)
        ];
    }
}
