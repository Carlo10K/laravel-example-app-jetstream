<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
    public function definition()
    {
        return [
            //
            'name' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'image'=> $this->faker->imageUrl(1280, 720),
            'description' => $this->faker->text(800),

            'user_id' => User::all()->random()->id,
            'category_id' => Category::all()->random()->id,

        ];
    }
}
