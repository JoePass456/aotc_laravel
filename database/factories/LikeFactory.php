<?php

namespace Database\Factories;

use App\Models\Like;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */



class LikeFactory extends Factory
{
    protected $model = Like::class;

    public function definition()
    {
        return [
            'post_id' => $this->faker->numberBetween($min = 1, $max = 20),            
            'user_id' => $this->faker->numberBetween($min = 1, $max = 20),
        ];
    }
}