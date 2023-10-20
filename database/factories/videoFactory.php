<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\video>
 */
class videoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'thumbnail' => 'https://loremflickr.com/446/240/world?random=' . rand(1, 99),
            'length' => $this->faker->randomNumber(3),
            'url' => 'https://filesamples.com/samples/video/mp4/sample_960x540.mp4',
            'slug' => $this->faker->slug(),
            'description' => $this->faker->realText(),
            'category_id' =>category::first() ?? category::factory(),
            'user_id' => User::first() ?? user::factory()
        ];
    }
}
