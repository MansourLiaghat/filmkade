<?php

namespace Database\Factories;

use App\Models\comment;
use App\Models\User;
use App\Models\video;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\like>
 */
class likeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $likeable = $this->likeable();
        return [
            'user_id' => user::first() ?? User::factory() ,
            'likeable_type' => $likeable ,
            'likeable_id' => $likeable::factory(),
            'vote' => $this->faker->randomElement([1 , -1])
        ];
    }


    private function likeable()
    {
        return $this->faker->randomElement([
            video::class,
            comment::class
        ]);
    }
}
