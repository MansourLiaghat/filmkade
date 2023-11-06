<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\video;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comment>
 */
class commentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'video_id' => video::first() ?? video::factory(),
            'body' => $this->faker->realtext()
        ];
    }
}
